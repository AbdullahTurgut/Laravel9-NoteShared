@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Add Category</h2>
                        </div>
                        <div class="d-flex">
                            <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>Add Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="card-title">Category Elements</h4>
        <form class="forms-sample" action="{{route('admin.category.store')}}" method="post">
            @csrf
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
                <label>Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                    <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
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
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
    <!-- content-wrapper ends -->
@endsection
