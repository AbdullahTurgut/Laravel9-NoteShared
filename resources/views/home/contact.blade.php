@extends('layouts.frontbase')

@section('title', 'Contact Us '.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('content')
    <div id="fh5co-course-categories">
        <div class="container">
            <div id="fh5co-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 animate-box">

                            <div class="fh5co-contact-info">
                                <h3>Contact Information</h3>
                                <ul>
                                    <li>{!! $setting->contact !!}</li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-8 animate-box">
                            <h3>Get In Touch</h3>
                            @include('home.messages')
                            <form action="{{route('storemessage')}}" method="post">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <!-- <label for="fname">First Name</label> -->
                                        <input type="text" name="name" class="form-control" placeholder="Your name & surname">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <label for="lname">Last Name</label> -->
                                        <input type="tel" name="phone" class="form-control" placeholder="Your phone number">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="email">Email</label> -->
                                        <input type="email" name="email" class="form-control" placeholder="Your email address">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="subject">Subject</label> -->
                                        <input type="text" name="subject" class="form-control" placeholder="Your subject of this message">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="message">Message</label> -->
                                        <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d772413.0789948233!2d29.28996816994216!3d40.86663794225442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb20946fcacc43%3A0xa82cb38deb56d859!2sKocaeli!5e0!3m2!1str!2str!4v1652092067170!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection


