<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /* get all product to the database*/
    public function index(){
        $product = Product::all();
        return $product;
    }

    /* add new product to the database */
    public function store(Request $request){
        $product = Product::create($request->all());
        return response()->json(['message'=>'Product Added Successfully'],  200);
    }

    /* update existing product in the database */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $product->update($request->all());
        return response()->json(['message'=>'Product is Update',$request->all()],  200);
    }

    /* delete a product with specific id from the database */
    public function destroy($id){
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $product->delete();
        return response()->json(['message'=>'Product Deleted Succfully'],  200);
    }

}
