window.onload = function(){
    var bt = document.getElementById('buttStart');
    bt.onclick = Click_button;
    var bs = document.getElementById('buttStop');
    bs.onclick = Stop_button;
    var bsend = document.getElementById('buttSend');
    var bd = document.getElementsByTagName('body');
    bd[0].onkeypress = DestroyLetter;
    var inter = []; //массив для интервалов
    var In; //пееременная для интервала движения
    var Cr; //пременная для интервала создания
    var Count; // счет
    function Cre() { //функция для создания букв
        let cr = document.createElement('p');//создаем р
        cr.classList.add('letter');//добавляем в него класс
        let ch = Math.round(0 - 0.5 + Math.random()*(26)); //случайный номер от 0 до 26
        cr.innerHTML = String.fromCharCode('a'.charCodeAt(0) + ch); //добавляем случаюную букву
        //добавляем случайный отступ
        cr.style.left = Math.random() * (parseInt(document.documentElement.clientWidth) - 10) + 4  + 'px';
        document.body.appendChild(cr);//добавляем его на поле
    }
    function go() {// функция для добавления элементов и их движения
        let elems = document.getElementsByClassName('letter');//ищем все элементы
        for (let elem of elems) {//и перебираем их
            let n = getComputedStyle(elem); //собираем все свойства элемента
            elem.style.top = parseInt(n.top) + (1 + Count/10) + 'px'; //добавляем отступ сверху
            //останавливаем, если дошло до конца
            if (parseInt(elem.style.top) > parseInt(document.documentElement.clientHeight)-15) {
                Stop_button();
            }
        }
    }
    function Click_button(e) { //по нажатию на кнопку старт
        Count = 0;
        let c = document.getElementById('count'); // ищем элемент для вывода счета
        c.innerHTML = 'счёт: ' + Count; //выводим счет
        In = setInterval(go, 15); //создается интервал для анимации
        Cr = setInterval(Cre, 1000); //интервал для создания букв
        bs.disabled = false; //включаем кнопку стоп
        bt.disabled = true; //отключаем старт
        bsend.disabled = true; // отключаем send
    }
    function Stop_button(e) { //по нажатию на кнопку стоп
        clearInterval(In);
        clearInterval(Cr);
        let elems = document.getElementsByClassName('letter');//ищем все элементы
        for (let i = elems.length - 1; i >= 0 ; i--) {//и перебираем их
        	document.body.removeChild(elems[i]); //удаляем
        };
        bt.disabled = false; //включаем кнопку старт
        bs.disabled = true; //отключаем стоп
        bsend.disabled = false; // включаем send

    }
    function DestroyLetter(e) { //по нажатию клавиши
        let lett = e.which; //узнаем код нажатой клавиши
        console.log(lett);
        let elems = document.getElementsByClassName('letter');//ищем все элементы
        if (elems.length == 0) return false;
        for (let elem of elems) {//и перебираем их
            if(elem.innerHTML.charCodeAt(0) == lett) {//если коды совпадают
            	document.body.removeChild(elem); //удаляем элемент
                Count++; //увеличииваем счет
                let c = document.getElementById('count'); // ищем элемент для вывода счета
                c.innerHTML = 'счёт: ' + Count; //выводим счет
                //обновляем значение в форме для отправки
                let s = document.getElementById('Send');
                s.value = Count;
                return 1;
            }
        }
        //если нет такой буквы, уменьшаем счёт
        Count--;
        let c = document.getElementById('count'); // ищем элемент для вывода счета
        c.innerHTML = 'счёт: ' + Count; //выводим счет
        //обновляем значение в форме для отправки
        let s = document.getElementById('Send');
        s.value = Count;
    }
}