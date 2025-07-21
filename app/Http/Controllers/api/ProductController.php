<?php

namespace App\Http\Controllers\api;

use App\Models\Product;
use App\Models\Productlink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //

    
        public function index(){

        // $userid = auth()->user()->id;

        $products = Product::with('category')->orderBy('created_at', 'desc')->get();

        // return response()->json(['products'=>$products]); 
        return response()->json(['products'=>$products]); 

        }

        public function showProduct($id){
            $product = Product::with('category')->find($id);
            return response()->json(['product'=>$product]);   
        }
         public function updateProductPrices(){
        // $products = Product::all();
        $productlinks =  Productlink::with('product')
            ->whereNotNull('product_id')
            ->orderBy('id', 'desc')
            // ->take(20)
            ->get(); // Eager load to optimize performance

        foreach ($productlinks as $productlink) {
            $product = $productlink->product;

            if ($product && isset($productlink->price)) {
                $formerprice = $product->price;
                $product->price = $productlink->price;
                $product->save();

                echo "✅ Updated Product ID {$product->id} Previously {$formerprice} with Price {$productlink->price}<br/>";
            } else {
                echo "❌ No valid productLink or missing price for Product ID {$product->id}<br/>";
            }
        }
        
    }
}
