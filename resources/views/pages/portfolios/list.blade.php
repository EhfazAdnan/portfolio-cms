@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Portfolio List</li>
                </ol>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>Sub title</th>
                            <th>Description</th>
                            <th>Client</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @if (count($portfolios) > 0)
                                @foreach ($portfolios as $portfolio)
                                <tr>
                                    <td>{{$portfolio->id}}</td>
                                    <td>{{$portfolio->title}}</td>
                                    <td>{{$portfolio->sub_title}}</td>
                                    <td>{{Str::limit(strip_tags($portfolio->description),40)}}</td>
                                    <td>{{$portfolio->client}}</td>
                                    <td>{{$portfolio->category}}</td>
                                    <td>
                                        <div class="row">
                                
                                            <div class="col-sm-2">
                                                <a href="{{route('admin.portfolios.edit', $portfolio->id)}}" class="btn btn-primary">Edit</a>
                                            </div>

                                            <div class="col-sm-2">
                                                <form action="{{route('admin.portfolios.destroy', $portfolio->id)}}" method="POST">
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
                