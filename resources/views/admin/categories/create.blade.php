@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {{-- <form action="{{ route('categories.store') }}" method="POST">
        @csrf


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="desc" placeholder="Detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <textarea class="form-control" style="height:150px" name="image" placeholder="Detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form> --}}
    <!-- Custom file input start -->
<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <a class="btn btn-primary" href="{{ route('admin.categories.index') }}">Orqaga</a>
            </div>
            <form enctype="multipart/form-data" action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Nomi</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Text</label>
                    <input class="form-control" type="text" name="desc">
                </div>
                <div class="form-group">
                    <label for="">Rasm</label>
                    <input  class="form-control-file" type="file" name="image">
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Yuborish</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Custom file input end -->
@endsection