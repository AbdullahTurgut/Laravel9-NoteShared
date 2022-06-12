@extends('layouts.frontbase')

@section('title', 'User Panel')

@section('content')
    <div id="fh5co-course-categories">
        <div class="container">
            <div id="fh5co-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 animate-box">
                            <h3>User Menu</h3>
                            @include('home.user.usermenu')
                        </div>
                        <div class="col-md-10 animate-box">

                            <div class="fh5co-contact-info">
                                <h3>User Profile</h3>
                            </div>
                            <div class="input-checkbox">
                                @include('profile.show')
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

