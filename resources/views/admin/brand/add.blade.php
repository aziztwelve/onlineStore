@extends('admin.layouts.app')

@section('content')
<div class="wrapper container-fluid col-md-8 col-md-offset-2">
	{!! Form::open(['url'=>route('brand_post_add'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
	
	<div class="form-group">
		{!! Form::label('name','Имя', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>

	



	<div class="form-group">
		{!! Form::label('imagePath','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('imagePath', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div>

{{ csrf_field() }}
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>
	
	{!! Form::close() !!}
</div>




@endsection