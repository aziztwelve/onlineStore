<head>
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div  class="container">


    
    <div style="float: right;margin-right: 50px; ">
        
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d1998.9425234021676!2d30.3610854!3d59.9330959!3m2!1i1024!2i768!4f13.1!4m9!3e2!4m3!3m2!1d59.9347049!2d30.3602527!4m3!3m2!1d59.933045699999994!2d30.3601335!5e0!3m2!1sru!2sru!4v1512522151409" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div>
    <div class="col-md-5" style="background-color: rgba(0, 0, 0, 0.01);">
        <div class="form" style="margin-top: 30px;>
            {{-- <form style="margin-top: 10px;"> --}}
                <div class="row d-flex justify-content-center">
                    <h3 class="white-text mb-0 py-5 font-bold" style="margin-left: 100px;" ><span>ОБРАТНАЯ СВЯЗЬ</span></h3>
                </div>
                {{-- @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif --}}
                
                {!! Form::open(['route'=>'contactus.store']) !!}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::label('Имя*') !!}
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите Имя']) !!}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::label('Email*') !!}
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Введите Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    {!! Form::label('Сообщение*') !!}
                    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'rows'=>'7', 'placeholder'=>'Введите Сообщение']) !!}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>
                
                <div class="form-group" style="margin-left: 150px;">
                    <button style="background-color: #11d6d4;" class="btn-us">Обратная связь</button>
                </div>
                
                
            {!! Form::close() !!}
        </div>




    </div>
</div>
<script>
$(document).ready(function(){
$('#characterLeft').text('140 characters left');
$('#message').keydown(function () {
var max = 140;
var len = $(this).val().length;
if (len >= max) {
$('#characterLeft').text('You have reached the limit');
$('#characterLeft').addClass('red');
$('#btnSubmit').addClass('disabled');
}
else {
var ch = max - len;
$('#characterLeft').text(ch + ' characters left');
$('#btnSubmit').removeClass('disabled');
$('#characterLeft').removeClass('red');
}
});
});
</script>