@extends('master')
@section('content')
    <div class="cart-container">
        <div class="cart-title"><h3>Order List</h3></div>
        @foreach($products as $item)
            <div class="result_card">
                <div class="result_img">
                    <img src="{{$item->gallery}}" alt="">
                </div>
                <div class="result_text">
                    <a href="details/{{$item->id}}">
                        <h5>{{$item->productName}}</h5>
                    </a>
                    <h6>{{$item->description}}</h6>
                    <h6>price : {{$item->price}}</h6>
                    <h6>Delivery address : {{$item->address}}</h6>
                </div>
            </div>
        @endforeach
    </div>
@endsection
