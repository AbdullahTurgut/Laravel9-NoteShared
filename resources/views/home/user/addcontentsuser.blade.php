@extends('layouts.frontbase')

@section('title', 'User Add Content')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
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
                                <h3>Add User Content</h3>
                            </div>
                            <div class="input-checkbox">
                                <h4 class="card-title">Content Elements</h4>
                                <!--Form işleminde image file için enctype ekledik.-->
                                <form class="forms-sample" action="{{route('userpanel.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Parent Content</label>
                                        <select class="form-control" name="category_id" >
                                            @foreach($data as $rs)
                                                <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Keywords</label>
                                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Description</label>
                                        <input type="text" class="form-control" name="description" placeholder="Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Details</label>
                                        <textarea class="form-control" id="detail" name="detail" placeholder="Detail">

                                        </textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#detail' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="image" class="form-control custom-file-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="file" class="form-control custom-file-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Status</label>
                                        <select class="form-control" name="status">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Save</button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

