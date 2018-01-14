@extends('admin.layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>Заказы</h2>
			@foreach($orders as $order)
			<div class="panel panel-default">
				<div class="panel-body">
					<ul class="list-group">
						@foreach($order->cart->items as $item)
							<li class="list-group-item">
								<span class="badge">{{ $item['price'] }}$</span>
								{{ $item['item']['title'] }} | {{ $item['qty'] }} units
							</li>
						@endforeach
					</ul>
				</div>
				<div class="panel-footer">
					<strong>Итого: {{ $order->cart->totalPrice }}$</strong>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection