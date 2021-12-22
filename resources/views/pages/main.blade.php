@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Main</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Main</li>
                </ol>

                <div class="row">

                    <div class="col-md-3 mt-3">
                        <h3>Background Image</h3>
                        <img style="height: 30vh" src="{{url($main->bc_img)}}" alt="background-image" class="img-thumbnail">
                        <input type="file" class="mt-3" id="bc_img" name="bc_img">
                    </div>

                    <div class="col-md-4 mt-5">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                        </div>

                        <div class="mb-3">
                            <label for="sub_title"><h4>Sub Title</h4></label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$main->sub_title}}">
                        </div>
                        
                        <div>
                            <h4>Upload Resume</h4>
                            <input type="file" class="mt-2" id="resume" name="resume">
                        </div>
                        
                    </div>

                    <div class="col-md-4 mt-5">
                        <div class="mb-3">
                            <iframe
                                src="{{url($main->resume)}}"
                                frameBorder="0"
                                scrolling="auto"
                                height="100%"
                                width="100%"
                            ></iframe>
                        </div>
                    </div>
                </div>     

        </div>
    </main>
@endsection
                