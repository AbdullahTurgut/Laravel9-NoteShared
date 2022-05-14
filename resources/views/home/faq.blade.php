@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
    <div id="fh5co-course-categories">
        <div class="container">
            <div class="fh5co-contact-info">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div id="accordion">
                @foreach($datalist as $rs)

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                {{$rs->question}}
                            </a>
                        </div>
                        <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                            <div class="card-body">
                                {!! $rs->answer !!}
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
@endsection


