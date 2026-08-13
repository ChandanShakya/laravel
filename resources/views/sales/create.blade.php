@extends('layouts.layout')
@section('title', 'Create Sale')
@section('content')
<style>
    #create-sale {
        max-width: 400px;
        margin: 3em auto;
        padding: 2em;
        background: #fff;
        border-radius: 8px;
    }
</style>
<div id="create-sale">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('sale.store') }}" method="post">
        @csrf
        <select name="product_id" required>
            <option value="" disabled selected>Select Product</option>
            @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select><br />
        <input type="number" name="quantity" placeholder="Quantity" value="{{ old('quantity') }}"><br />
        <input type="number" name="price" placeholder="Price" value="{{ old('price') }}"><br />
        <input type="date" name="date_sales" placeholder="Date Sales" value="{{ old('date_sales') }}"><br />
        <input type="submit" value="Create Sale">
    </form>
    <a href="{{ route('sale.index') }}">Back to Sales</a>
</div>
@endsection