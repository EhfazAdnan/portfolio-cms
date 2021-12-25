@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">About List</li>
                </ol>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>Sub title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @if (count($abouts) > 0)
                                @foreach ($abouts as $about)
                                <tr>
                                    <td>{{$about->id}}</td>
                                    <td>{{$about->title}}</td>
                                    <td>{{$about->title2}}</td>
                                    <td>{{Str::limit(strip_tags($about->description),40)}}</td>
                                    <td>
                                        <div class="row">
                                
                                            <div class="col-sm-2">
                                                <a href="{{route('admin.abouts.edit', $about->id)}}" class="btn btn-primary">Edit</a>
                                            </div>

                                            <div class="col-sm-2">
                                                <form action="{{route('admin.abouts.destroy', $about->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                    
                    </tbody>
                </table>

        </div>
    </main>
@endsection
                