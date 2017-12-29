@extends('master')
@section('content')

@foreach($brand->products->chunk(4) as $productChunk)
        <div class="row" style="margin-left: 30px;">
            @foreach($productChunk as $product)
            <div class="card classcard">
                <img style="z-index: 1;" class="card-img-top" src="{{ URL::to('/') }}/{{ $product->imagePath }}"  alt="Card image cap">
                <div style="z-index: 2;" class="card-body">
                    <a href="{!!    action('ProductController@show',    $product->id)  !!}">
                        <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">{{ $product->title }}</h6>
                    </a>
                    <div class="buy-block">
                        <h4 style="z-index: 1;"  class="card-sale">{{ $product->price }}$</h4>
                        <a style="z-index: 2;" href=" {{ route('addToCart', ['id'=>$product->id]) }} " class="btn-buy">в корзину</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
        @endsection
