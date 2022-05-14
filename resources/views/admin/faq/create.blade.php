@extends('layouts.adminbase')

@section('title', 'Add Question')
<!-- CK editörü implemente etmek için head areaya kod bloğu ekledik-->
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Add Question</h2>
                        </div>
                        <div class="d-flex">
                            <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>Add Question</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="card-title">FAQ Elements</h4>
        <!--Form işleminde image file için enctype ekledik.-->
        <form class="forms-sample" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail3">Question</label>
                <input type="text" class="form-control" name="question" placeholder="Question">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Answer</label>
                <textarea class="form-control" id="answer" name="answer" placeholder="Answer">

                </textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#answer' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
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
    <!-- content-wrapper ends -->
@endsection
