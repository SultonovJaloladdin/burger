@extends('layouts.admin')


@section('content')

    <div class="main-content">
        <!-- header area start -->
        <div class="header-area">
            <div class="row align-items-center">
                <!-- nav and search button -->
                <div class="col-md-6 col-sm-8 clearfix">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="search-box pull-left">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search..." required>
                            <i class="ti-search"></i>
                        </form>
                    </div>
                </div>
                <!-- profile info & task notification -->
                <div class="col-md-6 col-sm-4 clearfix">
                    <ul class="notification-area pull-right">
                        <li id="full-view"><i class="ti-fullscreen"></i></li>
                        <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- header area end -->
        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <ul class="breadcrumbs pull-left">
                            <li><a href="#">Home</a></li>
                            <li><span>Categories Table</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="row">
                <!-- Progress Table start -->
                {{-- <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('admin.contact.create') }}"> Yangi Categoriya qo'shish</a>
                            </div>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">nomi</th>
                                                <th scope="col">text</th>
                                                <th scope="col">image</th>
                                                <th scope="col">status</th>
                                            </tr>
                                        </thead>
                                        @foreach ($gets as $item)
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ $item->id }}</th>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->phone }}</td>  
                                                <td><img src="{{ $item->phone_2 }}" ></td>
                                                <td>

                                                </td>
                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! $gets->links() !!}
                </div> --}}
                <!-- Progress Table end -->
                <!-- Live Crypto Price area start -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @foreach ($gets as $item)
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('admin.contact.edit',$item->id) }}"> Malumotlarni o'zgartirish </a>
                            </div>
                            <div class="cripto-live mt-5">
                                <ul>
                                    <li>
                                        <div class="icon e">n</div> name<span>{{ $item->name }}</span></li>
                                    <li>
                                        <div class="icon e">p</div> phone<span>{{ $item->phone }}</span></li>
                                    <li>
                                        <div class="icon e">p</div> phone_2<span>{{ $item->phone_2 }}</span></li>
                                    <li>
                                        <div class="icon e">i</div> instagram<span>{{ $item->instagram }}</span></li>
                                    <li>
                                        <div class="icon e">f</div> facebook<span>{{ $item->facebook }}</span></li>
                                    <li>
                                        <div class="icon e">t</div> telegram<span>{{ $item->telegram }}</span></li>
                                    <li>
                                        <div class="icon e">t</div> tiktok<span>{{ $item->tiktok }}</span></li>
                                    <li>
                                        <div class="icon e">a</div> adress<span>{{ $item->adress }}</span></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Live Crypto Price area end -->
            </div>
        </div>
    </div>
@endsection