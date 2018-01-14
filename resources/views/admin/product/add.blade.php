@extends('admin.layouts.app')

@section('content')
<div class="wrapper container-fluid col-md-8 col-md-offset-2">
	{!! Form::open(['url'=>route('product_post_add'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
	
	<div class="form-group">
		{!! Form::label('title','Имя', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('title', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>

	

	<div class="form-group">
		{!! Form::label('description','Описание', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('description', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('price','Цена', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('price', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>


	<div class="form-group">
		{{-- {!! Form::label('price','Цена', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('price', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div> --}}


		{{-- @foreach($brands as $brand) --}}
		{!! Form::label('brand_id', 'Бренды', ['class' => 'col-xs-2 control-label']) !!}
		{{-- {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!} --}}
		{{-- @endforeach --}}
	<select id="country" name="brand_id" class="selectpicker form-control" data-live-search="true" style="margin-left: 15px; float: left; width: 580px;" title="Select Client">
		{{-- <select class="selectpicker form-control" data-live-search="true" title="Select Client"> --}}
		@foreach ($brands as $brand)
		<option value="{{ $brand->id }}">{{ $brand->name }}</option>
		@endforeach
	</select>


	

	</div>


	


	  {{--  <select class="selectpicker">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select> --}}

<script type="text/javascript">
	
// $('.selectpicker').selectpicker({
//   style: 'btn-info',
//   size: 4
// });
try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('popper.js').default;
    require('bootstrap');
} catch (e) {}

$(document).ready(function() {
   $('.selectpicker').selectpicker();
});
</script>







	{{-- <div class="form-group"> --}}
		{{-- {!! Form::label('price','Цена', ['class'=>'col-xs-2 control-label']) !!} --}}
		{{-- <div class="col-xs-8">
			{!! Form::text('price', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div> --}}
		{{-- <div class="input-group mb-3"> --}}
		  {{-- <select class="custom-select" >
		    <option selected>Choose...</option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
		   --}}
		{{-- </div> --}}
	{{-- </div> --}}







	<div class="form-group">
		{!! Form::label('content_text','Текст', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('content_text', old('name'), ['id'=>'editor', 'class'=>'form-control']) !!}
		</div>
	</div>


	<div class="form-group">
		{!! Form::label('images','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div>











	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>
	
	{!! Form::close() !!}
</div>

{{-- <select class="selectpicker">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Barbecue</option>
</select>

<script type="text/javascript">
$('.selectpicker').selectpicker();
</script> --}}

@endsection