@extends('master')
@section('content')
    <div class="detail-container">
        <a href="javascript:history.back();">Go Back</a>
        <div class="detail-item">
            <div class="row">
                <div class="col-sm-6 detail-img-box">
                    {{--                image--}}
                    <img src="{{$product['gallery']}}" alt="" class="detail-img">
                </div>
                <div class="col-sm-6 detail-text-box">
                    {{--                other details--}}
                    <h4>Name : {{$product['productName']}}</h4>
                    <h5>Price : {{$product['price']}}</h5>
                    <h6>Category : {{$product['category']}}</h6>
                    <h6>Description : {{$product['description']}}</h6>
                    <br><br>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <button class="btn btn-primary">Add to Cart</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
