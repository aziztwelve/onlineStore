@extends('welcome')

@section('content')
 


    <div id="primary" class="sidebar-right" style="margin-top: 30px;">

                    <div style="margin-left: 20%;">
                        
                        @include('layouts.sidebar')
                    </div>
                    <div class="inner group" style="float:left; width: 72%; margin-left: 30px;">
                        <div class="index-tabs">
                            <a href="">Хит</a>
                            <a href="">Новинки</a>
                            <a href="">Распродажи</a>
                            <a href="">Все</a>

                        </div>
                        @foreach($products->chunk(3) as $productChunk)
                        <div class="row">
                        @foreach($productChunk as $product)
                        <div class="card classcard">
                            <img class="card-img-top" src="{{ $product->imagePath }}" alt="Card image cap">
                            <div class="card-body">
                                <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">{{ $product->title }}</h6>
                                <div class="buy-block">
                                    <h4 class="card-sale">{{ $product->price }}$</h4>
                                    <a href=" {{ route('addToCart', ['id'=>$product->id]) }} " class="btn-buy">в корзину</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                       
                    </div>
                </div>

@endsection