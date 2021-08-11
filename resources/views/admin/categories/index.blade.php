@extends('layouts.admin')


@section('content')
    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.6 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Categories</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Id          </th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">image</th>
        </tr>
        @foreach ($gets as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->desc }}</td>
            <td>{{ $item->image }}</td>
            <td>
                <form action="{{ route('categories.destroy',$item->id) }}" method="POST">


                    <a class="btn btn-info" href="{{ route('categories.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('categories.edit',$item->id) }}">Edit</a>


                    @csrf
                    @method('DELETE')

   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $gets->links() !!} --}}




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
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('admin.categories.create') }}"> Yangi Categoriya qo'shish</a>
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
                                                <th scope="row">{{ (isset($i))?++$i:($i = 1) }}</th>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->desc }}</td>  
                                                <td><img src="{{'/storage/'.$item->image }}" height="50px" width="50px"/></td>
                                                <td>
                                                    <form action="{{ route('admin.categories.destroy',$item->id) }}" method="POST">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="{{ route('admin.categories.edit',$item->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                        
                                                            @csrf
                                                            @method('DELETE')
                                                            {{-- <li><a type="submit" class="btn btn-danger"><i class="ti-trash"></i></a></li> --}}
                                                            <li><i class="ti-trash"><button type="submit" class="btn btn-outline-light"></button></i></li>
                                                        </ul>
                                                    </form>
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
                </div>
                <!-- Progress Table end -->
            </div>
        </div>
    </div>
@endsection