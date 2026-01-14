<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return Product::all();
        } catch (\Throwable $th) {
            return response()->json([
                'message'=>'Select data not successfully',
                'error'=> $th->getMessage()
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
                'name'=>['required','string'],
                'price'=>['required' ,'numeric'],
                'stock'=>['required' ,'integer'],
                'image_url'=>['required','file']
            ]);
            $fileName = null;
            if($request->hasFile(key: "image_url")){
                $file = $request->file('image_url');
                $fileName = time().'.'.$file->getClientOriginalName();
                $file->move(public_path('images'),$fileName);
            }
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->image_url = 'images/'.$fileName;
            $product->save();
            return response()->json([
                'message'=>'Create product succesfully',
                'product'=> $product
            ],201);
        } catch (\Throwable $th) {
            return response()->json([
                'message'=>'Create product fail',
                'error'=> $th->getMessage()
            ],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $product = Product::findOrFail($id);
            return response()->json([
                'product' => $product
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Show product fail',
                'error'=> $th->getMessage()
            ],500);
        }
    }
    /**
         * Remove the specified resource from storage.
         */
        public function destroy($id)
        {
            try {
                $product = Product::destroy($id);
                return response()->json([
                    'message'=>'Delete product successfully',
                    'product'=> $product
                ],200);
            } catch (\Throwable $th) {
               return response()->json([
                'message'=>'Delete product fail',
                'error'=> $th->getMessage()
               ],500);
            }
        }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name'=>['required','min:3'],
                'price'=>['required'],
                'stock'=>['required'],
                'image_url'=>['required']
            ]);
            $product = Product::findOrFail($id);
            $product->update($data);
            return response()->json([
                'message'=>'Update product successfully',
                'product'=>$product
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'message'=>'Update was fail',
                'error'=>$th->getMessage()
            ],500);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    

    
}
