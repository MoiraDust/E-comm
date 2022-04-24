<div class="trending-container">
    <h3 class="trending-title">Trending Products</h3>
    <div class="trending-img-container">
        @foreach($trendings as $item)
            <div class="item-card">
                <img class="trending-img" src="{{$item['gallery']}}" alt="no pic">
                <h4>{{$item['productName']}}</h4>
            </div>
        @endforeach
    </div>
</div>
