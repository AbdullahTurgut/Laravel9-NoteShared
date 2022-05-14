@extends('layouts.adminbase')

@section('title', 'Edit FAQ')
<!-- Content edit sayfasındaki detail için summornote eklentilerini yaptık head kısmına css linki foot kısmına js -->

<!--SummerNote için Head alanına link ve foot alanına javascript kodlarını ekledik-->
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Edit {{$data->question}}</h2>
                        </div>
                        <div class="d-flex">
                            <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>Edit FAQ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="card-title">FAQ Elements</h4>
        <form class="forms-sample" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail3">Question</label>
                <input type="text" class="form-control" name="question" value="{{$data->question}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Answer</label>
                <textarea class="textarea" id="answer" name="answer" placeholder="Answer">
                        {{$data->answer}}
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Status</label>
                <select class="form-control" name="status">
                    <option selected>{{$data->status}}</option>
                    <option>True</option>
                    <option>False</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary me-2">Update</button>
        </form>
    </div>
    <!-- content-wrapper ends -->
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        //summernote textarea için textarea'daki class bizim için önemli
        $(function() {
            $('.textarea').summernote()
        })
    </script>
@endsection
