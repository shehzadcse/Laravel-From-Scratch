@extends('layouts.master')
@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.update', ['id'=>$product->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label>Title</label>
            <input type="text" class="form-control" value="{{$product->title}}" name="title" required>
        </div>
        <div class="form-row">
            <label>Description</label>
            <textarea class="form-control"  name="description" required >
            {{$product->description}}
            </textarea>
        </div>
        <div class="form-row">
            <label>Price</label>
            <input type="number" class="form-control" min="1.00" step="0.01" value="{{$product->price}}" name="price" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input type="number" class="form-control" value="{{$product->stock}}" name="stock" min="0" required>
        </div>
        <div class="form-row">
            <label>Status</label>
           <select class="custom-select" name="status" required>
                <option value="" >Select</option>
                <option value="available" {{$product->status == 'available' ? 'selected':'' }}>Available</option>
                <option value="unavailable" {{$product->status == 'unavailable' ? 'selected':'' }}>Unvailable</option>
           </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
        </div>
    </form>
@endsection