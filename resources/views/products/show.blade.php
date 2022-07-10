@extends('layouts.master')

@section('content')
    {{-- {{$product}} --}}
    <h1>{{$product->title }} ({{$product->id}})</h1>
    {{-- <h2>{{$product->id}}</h2> --}}
    <p>{{$product->description}}</p>
    <p>{{$product->price}}</p>
    <p>{{$product->stock}}</p>
    <p>{{$product->status}}</p>
@endsection