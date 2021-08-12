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
    <!-- Custom file input start -->
<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <a class="btn btn-primary" href="{{ route('admin.product.index') }}">Orqaga</a>
            </div>
            <form enctype="multipart/form-data" action="{{ route('admin.product.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Nomi</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Summa</label>
                    <input class="form-control" type="text" name="summa">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">skidka</label>
                    <input class="form-control" type="text" name="skidka">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Text</label>
                    <input class="form-control" type="text" name="desc">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Tanlang</label>
                    <select name="category_id" required class="form-control">
                        @foreach (\App\Categories::all() as $item)
                        <option value="{{$item->id}}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="1" class="form-check-input" name="status" checked>
                    <label class="form-check-label" for="exampleCheck1">active</label>
                </div>
                <br>
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