<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function PHPUnit\Framework\never;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $product = Product::with('categories')->get();
            return response()->json($product, 200);
        } catch (\Throwable $th) {
            return response()->json(
                ['message'=>$th->getMessage(),
            ],500);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['string'],
                'price' => ['numeric', 'required'],
                'category_id' => ['required','exists:categories,id']

            ]);
            $product = new Product();
            $product->name = request('name');
            $product->price = request('price');
            $product->category = request('category_id');

            $product->save();
            return response()->json($product, 201);
        } catch (\Throwable $th) {
            return response()->json(
                ['message'=>$th->getMessage(),
            ],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
