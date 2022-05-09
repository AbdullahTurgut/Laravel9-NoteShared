@extends('layouts.frontbase')

@section('title', 'About Us '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('content')
    <div id="fh5co-course-categories">
        <div class="container">
            {!! $setting->aboutus !!}
        </div>
    </div>
@endsection


