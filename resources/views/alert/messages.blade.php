@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
           <strong>Error!</strong> {{$error}}
        </div>
    @endforeach
@endif