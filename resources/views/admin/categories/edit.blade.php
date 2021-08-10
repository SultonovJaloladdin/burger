@extends('layouts.admin')


@section('content')
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
<!-- Custom file input start -->
<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <a class="btn btn-primary" href="{{ route('admin.categories.index') }}">Orqaga</a>
            </div>
            <form enctype="multipart/form-data" action="{{ route('admin.categories.update',$category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Nomi</label>
                    <input class="form-control" type="text" value="{{ $category->name }}" name="name">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Text</label>
                    <input class="form-control" type="text" value="{{ $category->desc }}" name="desc">
                </div>
                <div class="form-group">
                    <div class="col-md-8">
                        <label for="">Rasm</label>
                        <input  class="form-control-file" type="file" name="image" >
                        <img src="{{'/storage/'.$category->image}}" class="img-thumbnail" width="150px">
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Yuborish</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- Custom file input end -->

@endsection