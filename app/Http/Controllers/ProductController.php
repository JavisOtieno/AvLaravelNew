<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
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
        $products = Product::with('productLink')->take(10); // Eager load to optimize performance

        foreach ($products as $product) {
            $link = $product->productLink;

            if ($link && isset($link->price)) {
                $product->price = $link->price;
                $product->save();

                echo "✅ Updated Product ID {$product->id} with Price {$link->price}\n";
            } else {
                echo "❌ No valid productLink or missing price for Product ID {$product->id}\n";
            }
        }
        
    }



}
