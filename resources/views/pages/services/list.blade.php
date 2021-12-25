@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Service List</li>
                </ol>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Icon</th>
                            <th>title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @if (count($services) > 0)
                                @foreach ($services as $service)
                                <tr>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->icon}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>{{Str::limit(strip_tags($service->description),40)}}</td>
                                    <td>
                                        <div class="row">
                                
                                            <div class="col-sm-2">
                                                <a href="{{route('admin.services.edit', $service->id)}}" class="btn btn-primary">Edit</a>
                                            </div>

                                            <div class="col-sm-2">
                                                <form action="{{route('admin.services.destroy', $service->id)}}" method="POST">
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
                