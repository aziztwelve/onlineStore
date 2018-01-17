@extends('master')


@section('content')
<div class="container" >
	<h1>{{ $product->title }}</h1>
	<div class="catalog-element">
		<div width="0%" valign="top" class="catalog-element-photos lightbox">

			 


			<div class="catalog-element-info" style="float: right; margin-top:30px;">
				{{-- <div class="prices element-prices">
					<span class="price">{{ $product->price }}<i class="fa fa-rub" aria-hidden="true"></i>
					</span>
				</div>
				<div class="catalog-element-btns">
					<noindex>
					<a href="{{ route('addToCart', ['id'=>$product->id]) }} " class="add2cart btn big red-btn" rel="nofollow">Купить</a>
					</noindex>
				</div> --}}
				<table class="catalog-detail-props table-border">
					<tbody>
						<tr class="spaceUnder">
							<td>Цена</td>
							<td style="padding-left: 130px; ">{{ $product->price }}<i class="fa fa-rub" aria-hidden="true"></i></td>
						</tr>
						<tr>
							<td>Срок годности</td>
							<td style="padding-left: 130px; ">5 суток</td>
						</tr>
						<tr>
							<td>Вес</td>
							<td style="padding-left: 130px; min-width: 300px;">2 кг</td>
						</tr>
						{{-- <tr>
							<td>Производитель</td>
							<td style="padding-left: 130px;">Россия</td>
						</tr> --}}
						{{-- <tr>
							<td>О товаре</td>
							<td style="padding-left: 130px; ">{{ $product->description }}</td>
						</tr> --}}
					</tbody>
				</table>
				<noindex style="margin-left: 40px; margin-top: 30px;" class="product-icon-container">
					{{-- <div class="product-icon-container"> --}}
                        <a style="z-index: 2;" href=" {{ route('addToCart', ['id'=>$product->id]) }} " class="btn-buy">В КОРЗИНУ</a>
					</noindex>


<style>
	
	.table-border{
border-spacing: 1em;
border-collapse: separate;
}
.spaceUnder{
padding-bottom: 1em;
}
</style>


			</div>

			<div class="big-image" style="float: left; width: 250px; height: auto; margin-top:30px;">
				
				<div class="align-center"><img style="border-style: solid 2px;" itemprop="image" src="{{ URL::to('/') }}/{{ $product->imagePath }}" alt="Торт «Безе с клюквой и шоколадом»" title="Торт «Безе с клюквой и шоколадом»" width="450" height="375"></div>
			</div>
		</div>
	</div>
</div>
@endsection




	<style>
		




		#cart_body td {color:#575656;}
	.parametres td.dots, .parametres td.data {font-size:10pt;}

	.description small{ white-space: nowrap; }

	.description td.dots {width:420px;}

	.description div.image {padding-right: 20px; }

	.description .dots div{ background: url('/img/dots.gif') repeat-x bottom left; padding-right: 20px; }

	.description .dots span{ background: white; padding: 2px 5px 0 0; }
	</style>