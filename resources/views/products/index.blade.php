@extends('layouts.master')
@section('content')
<a class="btn btn-success" href="{{ route('products.create') }}">Create New</a>
    <h1>List of Products</h1>
    @php
    $x = count($products);
    @endphp
    @if ($x==0)
        <div class="alert alert-warning">
            No Products Found    
        </div>    
    @else
        <table class="table-responsive table-striped" style="margin:auto; background-color: powderblue"border=1>
            <thead class="thead-light">
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th colspan="3">Operations</th>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->stock}}</td>
                    <td>{{$item->status}}</td>
                    <td style="text-align: center; padding:5px;"><a class="btn btn-link" href="{{ route('products.show', ['product'=>$item->id]) }}"><button>Show</button></a></td>
                    <td style="text-align: center; padding:5px;"><a class="btn btn-link" href="{{ route('products.edit', ['product'=>$item->id]) }}"><button>Edit</button></a></td>
                    <td style="text-align: center; padding:5px;">
                        <form action="{{ route('products.destroy', ['product'=>$item->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif    
@endsection