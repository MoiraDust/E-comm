@extends('master')
@section('content')
    <div class="cart-container">
        <div class="cart-title"><h3>Cart List</h3></div>
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
                    {{-- remove--}}
                    <a href="/removeItem/{{$item->cart_id}}">
                        <button class="btn btn-outline-danger">Remove Item</button>
                    </a>
                </div>
            </div>
        @endforeach
            <a href="/checkorder">
                <button class="btn btn-outline-info">Place Order</button>
            </a>
    </div>
@endsection
