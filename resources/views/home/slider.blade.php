<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
            @foreach($sliderdata as $rs )
            <li style="background-image: url({{\Illuminate\Support\Facades\Storage::url($rs->image)}});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>{{$rs->title}}</h1>
                                <h2>{{$rs->keywords}}</h2>
                                <p><a class="btn btn-primary btn-lg" href="{{route('content',['id'=>$rs->id])}}">Start Learning Now!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</aside>
