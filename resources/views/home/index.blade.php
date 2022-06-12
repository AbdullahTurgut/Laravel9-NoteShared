@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))


@section('content')
    <div id="fh5co-course-categories">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>CONTENTS</h2>
                </div>
            </div>
            <div class="row">
                @foreach($contentlist1 as $rs)
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <div class="services">
						<span class="icon">
							<i class="icon-world"></i>
						</span>
                            <div class="desc">
                                <h3><a href="{{route('content',['id'=>$rs->id])}}">{{$rs->title}}</a></h3>
                                <p>{{$rs->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="fh5co-counter" class="fh5co-counters" style="background-image: url({{asset('assets')}}/images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>

    </div>

    <div id="fh5co-course">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Our Notes</h2>
                </div>
            </div>
            <div class="row">
                @foreach($contentlist1 as $rs)
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url({{\Illuminate\Support\Facades\Storage::url($rs->image)}});width:245px;height: 300px;">
                            </a>
                            @php
                                $average = $rs->comments->average('rate');
                            @endphp
                            <div class="desc">
                                <h3><a href="#">{{$rs->title}}</a></h3>
                                <a href="#">{{$rs->comments->count('id')}} Comment(s) & {{number_format($average,2)}} Av. Rate </a>
                                <p>{{$rs->description}}</p>

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
