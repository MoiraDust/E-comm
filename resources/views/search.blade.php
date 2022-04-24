@extends('master')
@section('content')
    <div class="search_container">
        @foreach($products as $item)
            <div class="result_card">
                <div class="result_img">
                    <img src="{{$item['gallery']}}" alt="">
                </div>
                <div class="result_text">
                    <h4>Product name : {{$item['productName']}}</h4>
                    <h5>price : {{$item['price']}}</h5>
                    <a href="details/{{$item['id']}}">View</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
