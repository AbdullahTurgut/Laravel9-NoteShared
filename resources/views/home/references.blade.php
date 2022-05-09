@extends('layouts.frontbase')

@section('title', 'References '.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('content')
    <div id="fh5co-course-categories">
        <div class="container">
            {!! $setting->references !!}
        </div>
    </div>
@endsection


