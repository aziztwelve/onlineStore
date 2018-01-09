@extends('welcome')
@section('content')
    <div class="inner group" style="float:left; width: 100%; margin-left: 30px;">
        <div class="index-tabs">
            <a href="">Хит</a>
            <a href="">Новинки</a>
            <a href="">Распродажи</a>
            <a href="">Все</a>
        </div>
        @foreach($products->chunk(4) as $productChunk)
        <div class="row" style="margin-left: 30px;">
            @foreach($productChunk as $product)
            <div class="card classcard">
                <img style="z-index: 1;" class="card-img-top" src="{{ $product->imagePath }}" alt="Card image cap">
                <div style="z-index: 2;" class="card-body" id="app">
                    <a href="{!!    action('ProductController@show',    $product->id)  !!}">
                        <h6 style="max-height: 38px; min-height: 38px; grid-auto-rows:2" class="card-title main-text">{{ $product->title }}</h6>
                    </a>
                    <div class="buy-block" id="app">
                        <h4 style="z-index: 1;"  class="card-sale">{{ $product->price }} <i class="fa fa-rub" aria-hidden="true"></i>
</h4>

                        <div class="product-icon-container">
                        <a style="z-index: 2;" href=" {{ route('addToCart', ['id'=>$product->id]) }} " class="btn-buy">В КОРЗИНУ</a>

                        </div>
                    
 





                        


                    
                        <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
                        <script src="https://unpkg.com/axios/dist/axios.min.js"></script> 
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
@endsection





