@extends('layouts.master')
@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="form-row">
            <label>Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-row">
            <label>Description</label>
            <textarea class="form-control"  name="description" required ></textarea>
        </div>
        <div class="form-row">
            <label>Price</label>
            <input type="number" class="form-control" min="1.00" step="0.01" name="price" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input type="number" class="form-control" name="stock" min="0" required>
        </div>
        <div class="form-row">
            <label>Status</label>
           <select class="custom-select" name="status" required>
                <option value="" selected>Select</option>
                <option value="available" >Available</option>
                <option value="unavailable" >Unvailable</option>
           </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
        </div>
    </form>
@endsection