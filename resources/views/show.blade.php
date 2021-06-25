
@extends('products')

@section('title','Layout page')

@section("header")
@parent
@endsection

@section('content')

<div> <h2> {{$product->prod_name}}</h2> 
    <p>{{$product->prod_desc}}</p>

    <a href="/product">Go to home</a>

</div>

@endsection

@section('footer')
@parent
@endsection
