@extends('layouts.layout')
@section('title', 'Create Product')
@section('content')
<style>
    #create-product {
        max-width: 400px;
        margin: 3em auto;
        padding: 2em;
        background: #fff;
        border-radius: 8px;
    }
</style>
<div id="create-product">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"><br />
        <input type="number" name="stock" placeholder="Stock" value="{{ old('stock') }}"><br />
        <input type="text" name="image_url" placeholder="Image URL" value="{{ old('image_url') }}"><br />
        <input type="number" name="price" placeholder="Price" value="{{ old('price') }}"><br />
        <input type="text" name="dealer" placeholder="Dealer" value="{{ old('dealer') }}"><br />
        <input type="date" name="date_arrived" placeholder="Date Arrived" value="{{ old('date_arrived') }}"><br />
        <input type="submit" value="Create Product">
    </form>
    <a href="{{ route('product.index') }}">Back to Products</a>
</div>
@endsection