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
    
    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('admin.product.create') }}"> Yangi Product qo'shish</a>
                        </div>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th>Nomi</th>
                                            <th scope="col">Categories</th>
                                            <th scope="col">summa</th>
                                            <th scope="col">skidka</th>
                                            <th scope="col">text</th>
                                            <th scope="col">image</th>
                                        </tr>
                                    </thead>
                                    @foreach ($product as $item)
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $item->name }}</th>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->summa }}</td>
                                            <td>{{ $item->skidka }}</td>  
                                            <td>{{ $item->desc }}</td>  
                                            <td><img src="{{'/storage/'.$item->image }}" height="50px" width="50px"/></td>                                            <td>
                                                <form action="{{ route('admin.product.destroy',$item->id) }}" method="POST">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3"><a href="{{ route('admin.product.edit',$item->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                    
                                                        @csrf
                                                        @method('DELETE')
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
                {!! $product->links() !!}
            </div>
            <!-- Progress Table end -->
        </div>
    </div>
</div>

@endsection