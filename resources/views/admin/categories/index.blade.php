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
                </div>
            </div>
        </div>
        <!-- header area end -->
        <!-- page title area start -->
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