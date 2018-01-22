@extends('admin.layouts.app')

@section('content')






@if (Session::has('success')) 
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
        @endif



@if(count($errors)>0)
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div class="alert alert-danger">
            {{-- <ul> --}}
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            {{-- </ul> --}}
        </div>
    </div>
</div>
@endif


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
		{!! Form::label('pull-date','Срок годности', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('pull-date', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('weight','Вес', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('weight', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>


	<div class="form-group">
		{!! Form::label('brand_id', 'Бренды', ['class' => 'col-xs-2 control-label', 'style'=>'margin-left:15px;']) !!}
		<select class="selectpicker" name="brand_id" data-show-subtext="true" data-live-search="true" style=" float: left; width: 580px;">
			@foreach ($brands as $brand)
			<option value="{{ $brand->id }}">{{ $brand->name }}</option>
			@endforeach
		</select>
	</div>



	{{-- <div class="form-group">
		{!! Form::label('content_text','Текст', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('content_text', old('name'), ['id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div> --}}


	<div class="form-group">
		{!! Form::label('imagePath','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('imagePath', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div>


	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>
	
	{!! Form::close() !!}
</div>


<script type="text/javascript">
$('.selectpicker').selectpicker();
</script>

@endsection