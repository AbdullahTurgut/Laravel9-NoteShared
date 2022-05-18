@extends('layouts.frontbase')

@section('title', $data->title)
@section('content')

    <div id="fh5co-about">
        <div class="container">
            @include('home.messages')
            <h1 style="text-align: center">{{$data->title}}</h1>
        </div>
        <div class="container">
            <img class="img-responsive" src="{{\Illuminate\Support\Facades\Storage::url($data ->image)}}" alt="">
        </div>
        <div class="container">
            <p>{!! $data->detail!!}</p>
        </div>
        <div id="fh5co-course-categories">
            <div class="container">
                <div id="fh5co-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 animate-box">
                                <h2>User's Comments</h2>
                                @foreach($comments as $rs)
                                    <div class="fh5co-contact-info">
                                        <div class="list-group-item-heading">
                                            <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user->name}} </a></div>
                                            <div><a href="#"><i class="fa fa-clock-o"></i>{{$rs->created_at}} </a></div>
                                            <div class="pull-right">
                                                <i class="fa fa-star @if($rs->rate < 1) -o empty @endif"></i>
                                                <i class="fa fa-star @if($rs->rate < 2) -o empty @endif"></i>
                                                <i class="fa fa-star @if($rs->rate < 3) -o empty @endif"></i>
                                                <i class="fa fa-star @if($rs->rate < 4) -o empty @endif"></i>
                                                <i class="fa fa-star @if($rs->rate < 5) -o empty @endif"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <strong>{{$rs->content_id}}</strong>
                                            <p>{{$rs->comment}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-8 animate-box">
                                <h2>Write Your Comment</h2>
                                <p>Your email address will not be published.</p>
                                <form action="{{route('storecomment')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="content_id" class="form-control" value="{{$data->id}}">
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <!-- <label for="message">Message</label> -->
                                            <textarea name="comment" cols="30" rows="10" class="form-control" placeholder="Your comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <!-- <label for="message">Message</label> -->
                                            <div class="input-rating">
                                                <strong class="text-uppercase">Your Rating: </strong>
                                                <div class="stars">
                                                    <input type="radio"  name="rate" value="5" /><label for="value5"> 5</label>
                                                    <input type="radio"  name="rate" value="4" /><label for="value4"> 4</label>
                                                    <input type="radio"  name="rate" value="3" /><label for="value3"> 3</label>
                                                    <input type="radio"  name="rate" value="2" /><label for="value2"> 2</label>
                                                    <input type="radio"  name="rate" value="1" /><label for="value1"> 1</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        @auth
                                            <input type="submit" value="Send Comment" class="btn btn-primary">
                                        @else
                                            <a href="/login" class="btn btn-primary">For Send Your Comment,Please Login </a>
                                        @endauth
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

