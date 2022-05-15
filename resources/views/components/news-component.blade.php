@foreach($news as $newsItem)
    <div class="post">
        <div class="first-part">
            <img src="https://unsplash.it/401" width="40px" height="40px">
            <h3>{{$newsItem->heading}}</h3>
            <h5>{{$newsItem->anons}}</h5>
        </div>
        <div class="second-part">
            <p class="texts">{{$newsItem->text}}</p>
        </div>
    </div>
@endforeach
