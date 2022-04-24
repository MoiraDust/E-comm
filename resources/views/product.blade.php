@extends('master')
@section('content')
    <div class="container custom-product">
        {{--        slider--}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                {{--                <div class="carousel-item active">--}}
                {{--                    <img class="d-block w-100" src="https://s1.ax1x.com/2022/04/23/LfTGVJ.jpg" alt="First slide">--}}
                {{--                </div>--}}
                @foreach($products as $item)
                    <div class="carousel-item {{$item['id']==1?'active':''}}">
                        <img class="slider-img" src="{{$item['gallery']}}" alt="no picture">
                        <div class="carousel-caption d-none d-md-block slider-text">
                            <h5>{{$item['productName']}}</h5>
                            <p>{{$item['description']}}</p>
                        </div>
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
        {{--        trending list--}}
        <div class="trending">
            <h3>Trending Products</h3>
            <div>
                <img src="" alt=""><div>
                    <h3></h3>
                </div>
            </div>
        </div>
    </div>
@endsection