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



<div style="margin: 0px 50px 0px 50px;">
{{-- @if($products) --}}
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>№</th>
				<th>Имя</th>
				<th>Срок годности</th>
				<th>Вес</th>
				<th>Цена</th>
				<th>Бренд</th>
				<th>Удалить</th>
				<th>Редактировать</th>
			</tr>
		</thead>

		<tbody>

		@foreach($products as $k=> $v)

			<tr>
				{{-- @foreach($v as $b) --}}
				<td>{{$v->id}}</td>
				{{-- <td>{!! Html::link(route('news_caseEdit',['case'=> $case->id]), $case->author, ['alt'=>$case->author]) !!}</td> --}}
				<td>{!! $v->title !!}</td>
				<td>{!! $v->pulldate !!}</td>
				<td>{!! $v->weight !!}</td>
				<td>{!! $v->price !!}</td>
				 
				<td>{!! $v['brand']['name']!!}</td>
				<td>
				{!! Form::open(['url'=>route('edit_hit_product',['v'=> $v->id]), 'class'=>'form-horizontal', 'method'=>'POST']) !!}

				{{ method_field('DELETE')}}
				{!! Form::button('Удалить',['class'=>'btn btn-danger', 'type'=>'submit']) !!}



				{!! Form::close() !!}
				</td>

				<td>{!! Html::link(route('edit_hit_product',['v'=> $v->id]), 'Редактировать', ['alt'=>$v->title]) !!}</td>
			</tr>


		@endforeach
			
		</tbody>
	</table>
{{-- @endif --}}

	
</div>

@endsection