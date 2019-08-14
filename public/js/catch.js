$(document).ready(() => {

    $("#catch").hide();
	let Bheight = window.innerHeight*0.1;
	let Bwidth = Bheight;
	$('#catch').css({'height': Bheight, 
		'width': Bwidth, 
		'font-size': Bheight/5});
	
	$("#buttStart").click(()=>{
	    let timer = 30;
	    let count = 0;
	    
	    $('#count').text('счёт: ' + count); // выводим счет
	    
		$("#catch").addClass("catch_me")
					.show()
					.mouseover(function() {
					    let t = $(this)
					    let to = setTimeout(() => {
					    t.css({'top': 130+Math.random()*(window.innerHeight-Bheight-250),
							'left': 100+Math.random()*(window.innerWidth-Bwidth-150)});
					    }, 200);
		}); // конец mouseover
		
		$('.catch_me').click(() => {
		    count++; // увеличиваем счет
			$('#count').text('счёт: ' + count); // выводим счет
		});
		
		$("#buttStart").attr("disabled", true);
		$("#buttSend").attr("disabled", true);
		let time = setInterval(()=>{
			timer--;
			if (timer == 0){
				clearInterval(time);
				$("#buttStart").val('Try again').attr("disabled", false);
				$("#buttSend").attr("disabled", false);
				$("#catch").hide();
				$("#send").val(count);
			}
			$("#timer").html("время: "+ timer + " сек");
		}, 1000);
	}); // конец button click
}); // конец ready
