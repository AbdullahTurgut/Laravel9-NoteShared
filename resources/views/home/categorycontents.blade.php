@extends('layouts.frontbase')

@section('title', $category->title ,'Contents')


@section('content')
    <div id="fh5co-course">
        <div class="container">
            <div class="row animate-box fadeInUp animated-fast">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>{{$category->title}}</h2>
                    <p>{{$category->description}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($contents as $rs)
                <div class="col-md-6 animate-box fadeInUp animated-fast">
                    <div class="course">
                        <a href="#" class="course-img" style="background-image: url({{\Illuminate\Support\Facades\Storage::url($rs->image)}});width:245px;height: 300px;">
                        </a>
                        <div class="desc">
                            <h3><a href="#">{{$rs->title}}</a></h3>
                            <p>{!! $rs->description !!}</p>

                        </div>
                        <div class="desc">
                            <span><a href="{{route('content',['id'=>$rs->id])}}" class="btn btn-primary btn-sm btn-course">Take A Look</a></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection


