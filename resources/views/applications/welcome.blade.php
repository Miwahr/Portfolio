@extends('layouts.master')

@section('title')
 <title>Приложения</title>
  @endsection('title')
  
  @section('scripts')
 <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#name").submit(function(evt){
                evt.preventDefault();
                $.ajax({
                    url: $(this).attr('action') + "?name=" + $(":text[name='name']").val(),
                    type: "GET",
                    success: function (data){
                    	var regV = /<main role='main' class='container-fluid'>((.*\n)+)<\/main>/m;
                        $('main').html(data.match(regV)[1]);
                    },
                    error: function(jqXHR, textStatus, errorThrown){
						$('.error').html("<ul><li>"+jqXHR.responseJSON.errors.name["0"]+" </ul></li>")
						.addClass("alert alert-danger");
                    } 
                });
                
            });
        });
    </script>
 @endsection('scripts')
 
@section('main')
<form id="name" method="GET" action="{{route('check_name')}}">
<h4 class="mb-3">Введите ваше имя</h4>
    <div class="input-group">
      <div class="input-group-prepend">
        <button class="btn btn-success" type="submit">Ok</button>
      </div>
      <input type="text" class="form-control" placeholder="имя" name="name" aria-describedby="basic-addon1">
    </div>
    <div class="error">
    @include('layouts.errors')
  </div>

</form>
@endsection('main')