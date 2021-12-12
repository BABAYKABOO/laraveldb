@extends('layout.app')
@section('title', 'Cart')
@section('content')
    <h1>Cart</h1>
    <h3 style="width: 1000px">All your goods</h3>
    <br/><br/>
    <? $sum = 0?>
    @foreach($cart as $row)
        <div style="height: 250px; width: 100%; margin: 0px 50px 100px 0px">
            <h2>Product: {{$products[$row->product_id-1]->product_name}}</h2>
            <p>Count: {{$row->count}}</p>
            <p>Price: {{$products[$row->product_id]->price}}</p><br/>
            <form method="post">
                <input type="submit" name="test" id="test" class="btn btn-danger" value="Remove from cart"/><br/>
            </form>
        </div>
    @endforeach
    <div style="height: 300px; width: 100%; margin: 0px 50px 100px 0px">
        <h1>Sum: 1356 $</h1>
    </div>
@endsection

