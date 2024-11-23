<?php

namespace App\Http\Controllers\store;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Rules\PhoneNumber;
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

    public function buyProduct($id){
        $product = Product::find($id);
        $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
        $maincategories = Category::where('type', 'main')->get();
        return view('buynow',compact('product','firstcategories','maincategories'));
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


        public function submitBuyProduct(Request $request){
        
        
            $credentials = $request->validate([
                'name'=>'required|string|max:255',
                'phone'=>['required','min:10','string','max:255', new PhoneNumber],
                'address'=>'required|string|max:1500',
                'product_id'=>'required|numeric|digits_between:1,20', 
                //'password'=>'required|string|max:255|min:8|confirmed',
            ]);
            // return "hello";
            //return 'test';
            $incomingFields['name']=strip_tags($credentials['name']);
            $incomingFields['phone']=strip_tags($credentials['phone']);
            $incomingFields['address']=strip_tags($credentials['address']);
            $incomingFields['product_id']=strip_tags($credentials['product_id']);

            $incomingFieldsCustomer['name']=$incomingFields['name'];
            $incomingFieldsCustomer['phone']=$incomingFields['phone'];
            $incomingFieldsCustomer['email']='';
    
            $customer = Customer::create($incomingFieldsCustomer);
            $customer_id = $customer->id;
            

            $incomingFieldsOrder['customer_id']=$customer_id;
            $incomingFieldsOrder['user_id']=request()->get('user')->id;
            $incomingFieldsOrder['quantity']=1;
            $incomingFieldsOrder['notes']=$incomingFields['address'];
            $incomingFieldsOrder['status']='pending';

            $product = Product::find($incomingFields['product_id']);
            $incomingFieldsOrder['value']=$product['price'];

            

            $order = Order::create($incomingFieldsOrder);

            $incomingFieldsOrderItem['product_id']=$incomingFields['product_id'];
            $incomingFieldsOrderItem['order_id']=$order->id;
            $incomingFieldsOrderItem['product_price']=$product['price'];
            $incomingFieldsOrderItem['product_profit']=$product['profit'];
            $incomingFieldsOrderItem['product_cost']=$product['cost'];

            $orderStatus=array(
                "message" => "Order Added Successfully",
                "status" => "success");
    
            // return response()->json($orderStatus);
            return redirect('/buynow/' . $product->id)->with('error', 'Order Added Successfully');
          
    }

        
}
