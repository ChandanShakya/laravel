<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Response;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sale = Sale::with('product')->get();

        return view('sales.index', compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $products = Product::all();

        return view('sales.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreSaleRequest $request)
    {
        $sale = new Sale;
        $sale->product_id = $request->product_id;
        $sale->price = $request->price;
        $sale->date_sales = $request->date_sales;
        $sale->quantity = $request->quantity;
        $sale->save();

        return redirect()->route('sale.index')->with('success', 'Sale recorded.');
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
