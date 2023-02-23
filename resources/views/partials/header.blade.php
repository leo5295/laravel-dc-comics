<header>
    <div class="container">
        <div class="row">
            @foreach ($links as $item)
            <div class="col d-flex justify-content-center align-items-center">
                <a href="{{$item['url']}}"> {{$item['label']}} </a>
            </div>
            @endforeach
        </div>
    </div>
</header>
