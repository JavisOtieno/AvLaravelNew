<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Productlink;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //admin functions
    public function index(){
        $products = Product::orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        return view('index',compact('products','categories'));
    }

    public function showUserProducts(){
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products',compact('products','categories'));
    }

    public function updateProductPrices(){
        // $products = Product::all();
        $productlinks = Productlink::with('product')->take(10)->get(); // Eager load to optimize performance

        foreach ($productlinks as $productlink) {
            $product = $productlink->product;

            if ($product && isset($productlink->price)) {
                $product->price = $productlink->price;
                $product->save();

                echo "✅ Updated Product ID {$product->id} with Price {$productlink->price}\n";
            } else {
                echo "❌ No valid productLink or missing price for Product ID {$product->id}\n";
            }
        }
        
    }



}
