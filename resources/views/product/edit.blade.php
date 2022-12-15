<style>
    #test{
        text-align:center;
        margin:10em;
    }
    </style>
<div id="test">
<form action="/product/update/{{$product->id}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{$product->name}}"><br/>
    <input type="number" name="stock" placeholder="stock" value="{{$product->stock}}"><br/>
    <input type="text" name="image_url" placeholder="url" value="{{$product->image_url}}"><br/>
    <input type="number" name="price" placeholder="price" value="{{$product->price}}"><br/>
    <input type="text" name="dealer" placeholder="dealer" value="{{$product->dealer}}"><br/>
    <input type="date" name="date_arrived" placeholder="Date Arrived" value="{{$product->data_arrived}}"><br/>
    <input type="submit">
</form>
</div>