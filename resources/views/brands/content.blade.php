@extends('master')
{{-- @section('slider')

    @parent
@show --}}
@section('content')

{{-- <div id="primary"  style="margin-top: 30px;"> --}}
    {{-- <div style="margin-left: 20%;"> --}}
        
        {{-- @include('layouts.sidebar') --}}
    {{-- </div> --}}
    <div class="inner group" style="float:left; width: 100%; margin-left: 30px;">
        
        {{-- @foreach($products->chunk(4) as $productChunk) --}}
        <div class="row" style="margin-left: 30px;">
            {{-- @foreach($productChunk as $product) --}}
            <div class="card classcard">
                <img style="z-index: 1;" class="card-img-top" src="{{ url('img/ferrero.jpg') }} " alt="Card image cap">
                <div style="z-index: 2;" class="card-body">
                    <a href="{{-- {!!    action('ProductController@show',    $product->id)  !!} --}}">
                        <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">fd{{-- {{ $product->title }} --}}</h6>
                    </a>
                </div>
            </div>


            <div class="card card-inverse">
  <img class="card-img" src="{{ url('img/ferrero.jpg') }}" alt="Card image">
  <div class="card-img-underlay">
    <h4 class="card-title">Card title</h4>
    
  </div>
</div>
            {{-- @endforeach --}}
        </div>
        {{-- @endforeach --}}
        
    </div>
{{-- </div> --}}
@endsection