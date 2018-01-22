@extends('master')
@section('content')
@if(Session::has('cart'))
<div class="row"  >
	<div style="margin-left: 70px; " class="col-sm-8.5 col-md-8.5 col-md-offset-3 col-sm-offset-3">
		<ul class="list-group">
			{{ csrf_field() }}
			@foreach($products as $product)
			
			<li class="list-group-item" style="margin-bottom: 20px;">
				@foreach($product as $item)
				<div style="float: left;  min-width: 600px;">
					
					<img style="width: 200px; height: 100px;  " src="{{ URL::to('/images') }}/{{ $item['imagePath'] }}" alt="">
					@endforeach
					<strong style="padding-left: 40px;: ">{{ $product['item']['title'] }}</strong>
					<span class="label label-success" style=" margin-left: 20px;">{{ $product['price'] }} <i class="fa fa-rub" aria-hidden="true"></i>
					</span>
					<span class="badge" style="margin-left:20px; ">
						Кол-во:
						{{ $product['qty'] }}
					</span>
				</div>
				<div class="btn-group" style="z-index: 1; float: right; margin-left: 20px; margin-top: 30px;  ">
					<button style="z-index: 2; color: black;" type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">
					Изменить <span class=""></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="{{ route('boostByOne', ['id' => $product['item']['id']]) }}">Увеличить на 1</a></li>
						<li><a href="{{ route('reduceByOne', ['id' => $product['item']['id']]) }}">Уменьшить на 1</a></li>
						<li><a href="{{ route('removeItem', ['id' => $product['item']['id']]) }}">Удалить</a></li>
					</ul>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<strong>Итого: {{ $totalPrice }} <i class="fa fa-rub" aria-hidden="true"></i>
</strong>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<a href="{{ route('orderGet') }}">
			{{ csrf_field() }}
		<button type="button" class="btn btn-success">ОФОРМИТЬ ЗАКАЗ</button>
		</a>
	</div>
</div>
@else
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<h2>No items in cart...</h2>
	</div>
</div>
@endif
@endsection