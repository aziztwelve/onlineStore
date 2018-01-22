@extends('admin.layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>Заказы</h2>
			@foreach($selforders as $order)
			<div class="panel panel-default">
				<div class="panel-body">
					<ul class="list-group">
						{{-- @foreach($orders as $order) --}}
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" >
						Тел: <span style="color: black; ">{{ $order->telephone }}</span>
						</button>
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" >
						Имя: <span style="color: black; ">{{ $order->name }}</span>
						</button>
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" >
						Самовывоз в: <span style="color: black; ">{{ $order->date }} | {!! date('H:i', strtotime($order->datetime)) !!}</span>
						</button>
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" >
						Время заказа: <span style="color: black; ">{!! date('Y-m-d, H:i', strtotime($order->created_at)) !!}</span>
						</button>
						@foreach($order->cart->items as $item)
						<li class="list-group-item">
							<span class="badge">{{ $item['price'] }} P
							</span>
							<span style="font-size: 17px;" class="badge">{{ $item['qty'] }} <span style="font-size: 7px;">(Кол-во)</span></span>

							<span style="float: left;" class="badge badge-light">{{ $item['item']['title'] }}</span>
							{{-- {{ $item['item']['title'] }} | {{ $item['qty'] }} штук (и) | --}}
							{{ $item['item']['brand']['name'] }}
							@endforeach
						</li>
						<hr>
						Комментарии:
							<blockquote>{{ $order->comment }}</blockquote>
					</ul>
				</div>
				<div class="panel-footer">
					<strong>Итого: {{ $order->cart->totalPrice }} P
					</strong>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection