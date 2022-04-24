@extends('master')
@section('content')
    @if(Session::has('user'))
        <div class="cart-container">
            <div class="cart-title"><h3>Cart List</h3></div>
            @foreach($products as $item)
                <div class="result_card">
                    <div class="result_img">
                        <img src="{{$item->gallery}}" alt="">
                    </div>
                    <div class="result_text">
                        <h4>Product name : {{$item->productName}}</h4>
                        <h5>{{$item->description}}</h5>
                        <h5>price : {{$item->price}}</h5>
                        <a href="details/{{$item->id}}">View</a>
                        /
                        <a href="#">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else

    @endif
@endsection
