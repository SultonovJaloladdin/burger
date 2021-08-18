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

<div class="main-content">    
    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 p-3">
                 <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="single-table">
                            <div class="table-responsive">
                               <form enctype="multipart/form-data" action="{{ route('admin.categories.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">название</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">текст</label>
                                        <input class="form-control" type="text" name="desc">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <label for="">изображение</label>
                                            <input  class="form-control-file" type="file" name="image" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Сохранить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Progress Table end -->
        </div>
    </div>
</div>
@endsection