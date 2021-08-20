@extends('layouts.admin')

@section('content')
    
<div class="main-content">
        <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 p-3">
                @foreach ($gets as $item)
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('admin.contact.edit',$item->id) }}"><i class="fa fa-edit"></i> Редактировать</a>
                    </div>
                @endforeach
                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            
                            @foreach ($gets as $item)
                            <div class="cripto-live mt-5">
                                <ul>
                                    <li>
                                        <div class="icon e">n</div>название<span>{{ $item->name }}</span></li>
                                    <li>
                                        <div class="icon e">p</div> телефон<span>{{ $item->phone }}</span></li>
                                    <li>
                                        <div class="icon e">p</div> телефон_2<span>{{ $item->phone_2 }}</span></li>
                                    <li>
                                        <div class="icon e">i</div> instagram<span>{{ $item->instagram }}</span></li>
                                    <li>
                                        <div class="icon e">f</div> facebook<span>{{ $item->facebook }}</span></li>
                                    <li>
                                        <div class="icon e">t</div> telegram<span>{{ $item->telegram }}</span></li>
                                    <li>
                                        <div class="icon e">t</div> tiktok<span>{{ $item->tiktok }}</span></li>
                                    <li>
                                        <div class="icon e">a</div> адрес<span>{{ $item->adress }}</span></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
            <!-- Progress Table end -->
        </div>
    </div>
</div>

@endsection