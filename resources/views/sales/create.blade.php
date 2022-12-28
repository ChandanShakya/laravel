@extends('layouts.layout')
@section('title', 'Sales')
@section('content')

<style>
    #test{
        text-align:center;
        margin:10em;
    }
    </style>
<div id="test">
<form action="/product/store" method="post">
    @csrf
    <input type="number" name="id" placeholder="id"><br/>
    <input type="number" name="product_id" placeholder="product_id"><br/>
    <input type="number" name="quantity" placeholder="quantity"><br/>
    <input type="number" name="price" placeholder="price"><br/>
    <input type="date" name="date_sales" placeholder="Date Sales"><br/>
    <input type="submit">
</form>
</div>
@endsection