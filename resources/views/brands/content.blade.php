@extends('master')
@section('content')
@foreach($brands->chunk(5) as $brandChunk)
<div class="row" style="margin: 0 10px 0 100px; " >
    @foreach($brandChunk as $brand)
    <div class="card card-inverse" style="width: 200px; height: 130; border: 0; margin-right: 30px; margin-bottom: 30px;">
        <img class="card-img" style=" max-height: 130px;" src="{{ URL::to('/images/brand/') }}/{{ $brand->imagePath }}" alt="Card image">
        <div class="card-img-underlay">
            <a href="{{ route('showBrand', ['id'=>$brand->id]) }}">
                <h4 class="card-title" style="text-align: center; color: grey; ">{{ $brand->name }}</h4>
                
            </a>
        </div>
    </div>
    @endforeach
</div>
@endforeach
@endsection