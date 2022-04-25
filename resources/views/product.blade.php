@extends('master')
@section('content')
    <div class="container custom-product">
        {{--        slider--}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                {{--                <div class="carousel-item active">--}}
                {{--                    <img class="d-block w-100" src="https://s1.ax1x.com/2022/04/23/LfTGVJ.jpg" alt="First slide">--}}
                {{--                </div>--}}
                @foreach($products as $item)
                    <div class="carousel-item {{$item['id']==1?'active':''}}">
                        <a href="details/{{$item['id']}}">
                            <img class="slider-img" src="{{$item['gallery']}}" alt="no picture">
                            <div class="carousel-caption d-none d-md-block slider-text">
                                <h5>{{$item['productName']}}</h5>
                                <p>{{$item['description']}}</p>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{--        {{View::make('trending')}}--}}
        {{--        trending list--}}
        <div class="trending-container">
            <h3 class="trending-title">Product List</h3>
            <div class="trending-img-container">
                @foreach($trendings as $item)
                    <a href="details/{{$item['id']}}">
                        <div class="item-card">
                            <img class="trending-img" src="{{$item['gallery']}}" alt="no pic">
                            <h4>{{$item['productName']}}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
