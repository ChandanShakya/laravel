@extends('layouts.layout')
@section('title', 'Products')
@section('content')
<!-- <p>This is product {{ $product->id }}</p> -->
<table class="table table-striped">

    <thead>

        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Dealer</th>
            <th>Price</th>
            <th>Date of Sales</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)

        <tr>
            <td>{{$product -> name }}</td>
            <td>{{$product -> stock }}</td>
            <td>{{$product -> dealer }}</td>
            <td>{{$product -> price}}</td>
            <td>{{$product -> sale ? $product->sale->date_sales}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection