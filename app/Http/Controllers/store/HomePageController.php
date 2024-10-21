<?php

namespace App\Http\Controllers\store;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    //
    public function index(){
    // $user = User::find(1);
    // request()->get('user');
    return view('index');
    }
    public function shop(){
        // $websiteName = $request->get('websiteName');
        // $user = User::find(1);
        // $products = Product::all();

        // ,'websiteName'
    $products = Product::all();
    $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
    $maincategories = Category::where('type', 'main')->get();
    // return $firstcategories[0]['mame'];
    return view('shop', compact('products','firstcategories','maincategories'));
    }

    //store functions
    public function showProduct($id){
        $product = Product::find($id);
        $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
        $maincategories = Category::where('type', 'main')->get();
        return view('product',compact('product','firstcategories','maincategories'));
    }

        //
        public function showCustomerAccount(){
            $user = User::find(1);
            $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
        $maincategories = Category::where('type', 'main')->get();
            return view('account',compact('user','firstcategories','maincategories'));
        }

        public function contact(){
            $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
        $maincategories = Category::where('type', 'main')->get();
        return view('contact','firstcategories','maincategories');
        }

        
}
