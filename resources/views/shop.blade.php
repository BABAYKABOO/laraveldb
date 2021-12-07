@extends('layout.app')
@section('title', 'Shop')
@section('content')
<h1>Shop</h1>
<h3 style="width: 1000px">Our cool shop</h3>
@foreach($products as $product)
    <div style="height: 300px; width: 150px; margin: 0px 50px 100px 0px">
        <div class="my-5" style="height: 200px; width: 150px">
            <hr class="tm-hr-primary">
            <h2>{{$product->product_name}}</h2>
            <p>{{$product->price}}</p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <span></span>
            <span>{{$product->product_price}}</span>
            <a href="shop/{{$product->product_id}}" style="color: #3c3c3c">
                <button type="button" class="btn btn-warning">Buy</button>
            </a>
        </div>
    </div>
@endforeach
@endsection
