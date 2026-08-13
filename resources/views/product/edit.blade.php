@extends('layouts.layout')
@section('title', 'Edit Product')
@section('content')
<style>
    #edit-product {
        max-width: 400px;
        margin: 3em auto;
        padding: 2em;
        background: #fff;
        border-radius: 8px;
    }
</style>
<div id="edit-product">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ $product->name }}"><br />
        <input type="number" name="stock" placeholder="Stock" value="{{ $product->stock }}"><br />
        <input type="text" name="image_url" placeholder="Image URL" value="{{ $product->image_url }}"><br />
        <input type="number" name="price" placeholder="Price" value="{{ $product->price }}"><br />
        <input type="text" name="dealer" placeholder="Dealer" value="{{ $product->dealer }}"><br />
        <input type="date" name="date_arrived" placeholder="Date Arrived" value="{{ $product->date_arrived }}"><br />
        <input type="submit" value="Update Product">
    </form>
    <a href="{{ route('product.index') }}">Back to Products</a>
</div>
@endsection