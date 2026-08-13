<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();

        // return $product;
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'stock' => ['required', 'integer', 'min:0'],
            'image_url' => ['nullable', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:0'],
            'dealer' => ['nullable', 'string', 'max:255'],
            'date_arrived' => ['nullable', 'date'],
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->image_url = $request->image_url;
        $product->price = $request->price;
        $product->dealer = $request->dealer;
        $product->date_arrived = $request->date_arrived;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'stock' => ['required', 'integer', 'min:0'],
            'image_url' => ['nullable', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:0'],
            'dealer' => ['nullable', 'string', 'max:255'],
            'date_arrived' => ['nullable', 'date'],
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->image_url = $request->image_url;
        $product->price = $request->price;
        $product->dealer = $request->dealer;
        $product->date_arrived = $request->date_arrived;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted.');
    }
}
