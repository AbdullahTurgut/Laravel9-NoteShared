@extends('layouts.adminbase')

@section('title', 'Settings')

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
                            <h2>Settings</h2>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>Settings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
            <section class="content-wrapper">
                @csrf
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill" href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill" href="#custom-tabs-one-social" role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-about-tab" data-toggle="pill" href="#custom-tabs-one-about" role="tab" aria-controls="custom-tabs-one-about" aria-selected="false">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Icon</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" name="icon" class="form-control custom-file-input">
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="custom-tabs-one-smtp" role="tabpanel" aria-labelledby="custom-tabs-one-smtp-tab">
                                    <div class="form-group">
                                        <label>Smtp Server</label>
                                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtp E-mail</label>
                                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtp Password</label>
                                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtp Port</label>
                                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social-tab">
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="custom-tabs-one-about" role="tabpanel" aria-labelledby="custom-tabs-one-about-tab">
                                    <div class="form-group">
                                        <label>About Us</label>
                                        <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                                    <div class="form-group">
                                        <label>References</label>
                                        <textarea id="references" name="references">{{$data->references}}</textarea>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Setting</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
    <!-- content-wrapper ends -->
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        })
    </script>
@endsection
