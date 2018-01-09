@extends('master')
@section('content')
@if(Session::has('cart'))
<div class="row"  >
	<div style="margin-left: 70px; " class="col-sm-7 col-md-7 col-md-offset-3 col-sm-offset-3">
		<ul class="list-group">
			@foreach($products as $product)
			<li class="list-group-item" style="margin-bottom: 20px;">
				@foreach($product as $item)
				<img style="width: 200px; height: 100px;  " src="{{ $item['imagePath'] }}" alt="">
				@endforeach
				<span class="badge" style="margin-top: 40px;">{{ $product['qty'] }}</span>
				<strong>{{ $product['item']['title'] }}</strong>
				<span class="label label-success">{{ $product['price'] }} <i class="fa fa-rub" aria-hidden="true"></i>
</span>
				<div class="btn-group" style="z-index: 1;">
					<button style="z-index: 2;" type="button" data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">
					Action <span class=""></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">Reduce by 1</a></li>
						<li><a href="#">Reduce all</a></li>
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
		<button type="button" class="btn btn-success">ОФОРМИТЬ ЗАКАЗ</button>
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