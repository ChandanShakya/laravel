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
    <input type="text" name="name" placeholder="name"><br/>
    <input type="number" name="stock" placeholder="stock"><br/>
    <input type="text" name="image_url" placeholder="url"><br/>
    <input type="number" name="price" placeholder="price"><br/>
    <input type="text" name="dealer" placeholder="dealer"><br/>
    <input type="date" name="date_arrived" placeholder="Date Arrived"><br/>
    <input type="submit">
</form>
</div>