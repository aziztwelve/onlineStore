@extends('welcome')

@section('slider')

@stop
@section('content')

<div class="container">
<h1>{{ $product->title }}</h1>
<div class="catalog-element">
	
	<div width="0%" valign="top" class="catalog-element-photos lightbox">
		<div class="big-photo">
			<a href="/upload/resize_cache/iblock/9b3/800_800_19cf41f605e85bd6db395c2e827e92c34/87.jpg" class="inline fancybox" rel="fancybox">
				<img src="{{ $product->imagePath }}" alt="">
				<span class="catalog-element-zoom"></span>
			</a>
			
			</div><!--.big-photo-->
			<div class="photo-list">
				
				</div><!--.photo-list-->
				</div><!--.photos-->
				<div class="catalog-element-info">
					<div class="prices element-prices">
						<span class="price">{{ $product->price }}</span>
						</div><!--.prices element-prices-->
						<div class="catalog-element-btns">
							<noindex>
							<a href="{{ route('addToCart', ['id'=>$product->id]) }} " class="add2cart btn big red-btn" rel="nofollow">Купить еще 1</a>
							</noindex>
							</div><!--.catalog-element-btns-->
							<table class="catalog-detail-props">
								<tbody><tr><td>Размер</td><td>52 х 56 см</td></tr>
								<tr><td>Материал</td><td>хлопок 165 г/м2</td></tr>
								<tr><td>Производитель</td><td>Россия</td></tr>
								<tr><td>О товаре</td><td>{{ $product->description }}</td></tr>
							</tbody></table>
							
							
							
							</div><!--.catalog-element-info-->
						</div>
					</div>
						@endsection