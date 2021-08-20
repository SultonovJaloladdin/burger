@extends('layouts.admin')

@section('content')
    
<div class="main-content">
    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 p-3">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.product.create') }}"> <i class="fa fa-plus"></i> Добавить</a>
                </div>
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
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">название</th>
                                            <th scope="col">категории</th>
                                            <th scope="col">цена</th>
                                            <th scope="col">скидка</th>
                                            <th scope="col">текст</th>
                                            <th scope="col">изображение</th>
                                            <th scope="col"></th>
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
                                            <td><img src="{{'/storage/'.$item->image }}" height="50px" width="50px"/></td>                                            
                                            <td>
                                                <form method="POST" action="{{route('admin.product.destroy', $item->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('admin.product.edit',$item->id) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                                    <button onclick="if (!confirm('Вы уверены?')) return false" type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
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