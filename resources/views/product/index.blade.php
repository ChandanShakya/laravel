@extends('layouts.layout')
@section('title', 'Products')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div>
    <a href="{{ route('product.create') }}">Create Product</a>
    <a href="{{ route('sale.index') }}">View Sales</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Dealer</th>
            <th>Price</th>
            <th>Date Arrived</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->dealer }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->date_arrived }}</td>
            <td>
                <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                <form action="{{ route('product.delete', $product->id) }}" method="post" style="display:inline"
                    onsubmit="return confirm('Delete this product?');">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection