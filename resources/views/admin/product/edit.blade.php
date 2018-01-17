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




<div class="wrapper container-fluid">
{!! Form::open(['url'=>route('admin_product', ['id'=>$edit->id]), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}



	<div class="form-group">
		{!! Form::label('id','№', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('id', $edit->id, ['class'=>'form-control',]) !!}
		</div>
	</div>




	<div class="form-group">
		{{-- {!! Form::hidden('id', $data['id']) !!} --}}
		{!! Form::label('title', 'Имя', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('title', $edit->title, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Описание', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('description', $edit->description, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('price', 'Цена', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('price', $edit->price, ['class'=>'form-control']) !!}
		</div>
	</div>

	

	{{-- <div class="form-group">
		{!! Form::label('images','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div> --}}

	<div class="form-group">
		{!! Form::label('pulldate', 'Срок годности',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('pulldate', $edit->pulldate,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('weight', 'Вес', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('weight', $edit->weight, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('brand_id', 'Бренды', ['class' => 'col-xs-2 control-label', 'style'=>'margin-left:15px;']) !!}
		<select class="selectpicker" name="brand_id" data-show-subtext="true" data-live-search="true" style=" float: left; width: 580px;">
			<option value="{{ $brandId->id }}" selected>{{ $brandId->name }}</option>
			@foreach ($brands as $brand)
			<option value="{{ $brand->id }}">{{ $brand->name }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('imagePath','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('imagePath', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div>

	{{-- <div class="form-group">
		{!! Form::label('content_text', 'Текст', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('content_text', $data['content_text'], ['id'=>'editor', 'class'=>'form-control']) !!}
		</div>
	</div> --}}

	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>

{!! Form::close() !!}
</div>

@endsection

{{-- <script>
	CKEDITOR.replace('editor', options);

    $('#time').datetimepicker({
        format: 'dd/mm/yyyy HH:mm'
    });

    $(function () {
    		            $('#datetimepicker1').datetimepicker({format: 'HH:mm'});
    		        });
</script> --}}