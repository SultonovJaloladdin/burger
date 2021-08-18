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
                                <form action="{{ route('admin.contact.update',$contact->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Nomi</label>
                                        <input class="form-control" type="text" value="{{ $contact->name }}" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">phone</label>
                                        <input class="form-control" type="text" value="{{ $contact->phone }}" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">phone_2</label>
                                        <input class="form-control" type="text" value="{{ $contact->phone_2 }}" name="phone_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">instagram</label>
                                        <input class="form-control" type="text" value="{{ $contact->instagram }}" name="instagram">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">facebook</label>
                                        <input class="form-control" type="text" value="{{ $contact->facebook }}" name="facebook">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">telegram</label>
                                        <input class="form-control" type="text" value="{{ $contact->telegram }}" name="telegram">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">tiktok</label>
                                        <input class="form-control" type="text" value="{{ $contact->tiktok }}" name="tiktok">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">adress</label>
                                        <input class="form-control" type="text" value="{{ $contact->adress }}" name="adress">
                                    </div>
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