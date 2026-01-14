<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Product::all();
        return view("TableProduct",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("CreateProduct");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => ['required','string'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required','integer'],
            'category' => ['required', 'string'],
        ]);

        $insert = Product::create([
            "name" => request("name"),
            "price" => request("price"),
            "quantity" => request("quantity"),
            "category" => request("category"),
            "total" => request("price") * request("quantity")
        ]);
        if($insert){
            // return redirect("/")->with("message","Create new product success");
            return redirect()->back()->with('message', 'Product added successfully! 👏👏');
        }else{
            return redirect("/create")->with("message","Something is fail ❌");
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $select = Product::find($id);
        return view("ShowProduct", compact("select"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $request , $id)
    {
        //

        $select = Product::find(id: $id);
        return view("TableProduct", compact("select"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $request->validate([
            'name' => ['required','string',"min:3","max:10"],
            'price' => ['required', 'numeric'],
            'quantity' => ['required','integer'],
            'category' => ['required', 'string'],
        ]);
        $update = Product::find($id)->update([
            'name'=> request('name'),
            'price'=> request("price"),
            "quantity"=> request("quantity"),
            "category"=> request("category"),
        ]);
        if($update){
            return redirect("/")->with("message" ,"Update successfully" );
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $remove = Product::destroy($id);
       if($remove){
         return redirect("/")->with("message","Remove successfully bro! 👏👏");
       }
       else{
        return redirect("/")->with("message","Something was wrong! ❌");
       }
    }

}
