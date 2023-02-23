<div class="series">
    <div class="container-fluid">
        <div class="row">
            @foreach ($series as $key => $item)
            <div class="col-2">
            <a href="{{route('single', ['param' => $key])}}">
                <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                <div class="title">
                    {{$item['series']}}
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
























<style>

    .series{
        background-color: black;
        color: white
    }
    .container-fluid{
        width: 90%;
        padding: 30px 0px 30px 0px;
    }

    img{
        width: 200px;
        height: 200px;
        object-fit: cover;
    }

    .title{
        text-transform: uppercase;
    }
</style>