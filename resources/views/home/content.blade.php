@extends('layouts.frontbase')

@section('title', $data->title)


@section('content')

    <div id="fh5co-about">
        <div class="container">
           <h1 style="text-align: center">{{$data->title}}</h1>
        </div>
        <div class="container">
                <img class="img-responsive" src="{{\Illuminate\Support\Facades\Storage::url($data ->image)}}" alt="">
        </div>
        <div class="container">
            <p>{!! $data->detail!!}</p>
        </div>
    </div>

@endsection
