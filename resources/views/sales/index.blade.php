@extends('layouts.layout')
@section('title', 'Sales')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div>
    <a href="{{ route('sale.create') }}">Create Sale</a>
    <a href="{{ route('product.index') }}">View Products</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sale as $item)
        <tr>
            <td>{{ $item->product->name ?? '—' }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->date_sales }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection