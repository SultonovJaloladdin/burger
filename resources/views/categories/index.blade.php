@extends('categories.layout')


@section('content')
    <div class="row">
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


    {!! $gets->links() !!}


@endsection