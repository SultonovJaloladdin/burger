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
                <a class="btn btn-primary" href="{{ route('admin.contact.index') }}">Orqaga</a>
            </div>
            <form enctype="multipart/form-data" action="{{ route('admin.contact.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Name</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">phone</label>
                    <input class="form-control" type="text" name="phone">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">phone_2</label>
                    <input class="form-control" type="text" name="phone_2">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">instagram</label>
                    <input class="form-control" type="text" name="instagram">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">facebook</label>
                    <input class="form-control" type="text" name="facebook">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">telegram</label>
                    <input class="form-control" type="text" name="telegram">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">tiktok</label>
                    <input class="form-control" type="text" name="tiktok">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">adress</label>
                    <input class="form-control" type="text" name="adress">
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