@if ($errors->any())
    @foreach ($eerors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
           <strong>Error!</strong> {{$error}}
        </div>
    @endforeach
@endif