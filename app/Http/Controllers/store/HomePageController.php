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
    public function shop(Request $request){
        // $websiteName = $request->get('websiteName');
        // $user = User::find(1);
        // $products = Product::all();

        // ,'websiteName'
    // $products = Product::all();
    // $products = Product::orderBy('created_at', 'desc')->paginate(30); 

        // Get the per-page value from the request, default to 30 if not provided.
        $perPage = $request->get('ppp', 30);

        if ($perPage == -1) {
            // If "Show All" is selected, paginate with the total count so that links() still works
            $totalProducts = Product::count();
            // $products = Product::paginate($totalProducts);
            $products = Product::orderBy('id', 'desc')->paginate($totalProducts);
        } else {
            $products = Product::orderBy('id', 'desc')->paginate($perPage);
        }

    $firstcategories = Category::where('parent_category_id', '42')->where('type', 'sub')->get();
    $maincategories = Category::where('type', 'main')->get();
    $categories = Category::where('type', 'main')
    ->with('children')
    ->get();
    $categorySelectedName = 'phones';
    // return $firstcategories[0]['mame'];
    return view('shop', compact('categorySelectedName','products','firstcategories','maincategories','categories'));
    }

    public function searchProducts(Request $request){
        $search = $request->get('search');
        // $user = User::find(1);
        // $products = Product::all();

        // ,'websiteName'
    // $products = Product::all();
    // $products = Product::orderBy('created_at', 'desc')->paginate(30); 

        // Get the per-page value from the request, default to 30 if not provided.
        $perPage = $request->get('ppp', 30);

        $query = Product::query();

        // If a search term is provided, add a where clause with wildcards for partial matching.
        if ($search) {
            // $searchTerm = '%' . $search . '%';
            // $query->where('name', 'like', $searchTerm);
            $words = preg_split('/\s+/', $search);

            // For each word, add a where clause that checks if the product name contains the word.
            foreach ($words as $word) {
                $query->where('name', 'like', '%' . $word . '%');
            }
        }

        if ($perPage == -1) {
            // If "Show All" is selected, paginate with the total count so that links() still works
            $totalProducts = Product::count();
            $products = $query->orderBy('id', 'desc')->paginate($totalProducts);
        } else {
            $products = $query->orderBy('id', 'desc')->paginate($perPage);
        }

    $firstcategories = Category::where('parent_category_id', '0')->where('type', 'sub')->get();
    $maincategories = Category::where('type', 'main')->get();
    $categories = Category::where('type', 'main')
    ->with('children')
    ->get();
    $categorySelectedName = 'search';
    // return $firstcategories[0]['mame'];
    return view('shop', compact('categorySelectedName','products','firstcategories','maincategories','categories'));
    }

    public function showCategory($category,Request $request){
        // $websiteName = $request->get('websiteName');
        // $user = User::find(1);
        // $products = Product::all();

        // ,'websiteName'
    // $products = Product::all();
    $categorySelected = Category::where('name', $category)->first();

    // return $categorySelected;

        // Get the per-page value from the request, default to 30 if not provided.
        $perPage = $request->get('ppp', 30);

        

        if ($perPage == -1) {
            // If "Show All" is selected, paginate with the total count so that links() still works
            $totalProducts = Product::count();
            
            
            if($categorySelected->type=='main'){
                $products = Product::orderBy('created_at', 'desc')
                ->where('category_id', $categorySelected->id)
                ->paginate($totalProducts); 
                // return "main";
            }else if($categorySelected->type=='sub'){
                $products = Product::orderBy('created_at', 'desc')
                ->where('sub_category_id', $categorySelected->id)
                ->paginate($totalProducts); 
                // return "sub";
            }else if($categorySelected->type=='subsub'){
                $products = Product::orderBy('created_at', 'desc')
                ->where('sub_sub_category_id', $categorySelected->id)
                ->paginate($totalProducts); 
                // return "sub sub";
            }

        } else {
            
           
            if($categorySelected->type=='main'){
                $products = Product::orderBy('created_at', 'desc')
                ->where('category_id', $categorySelected->id)
                ->paginate($perPage); 
                // return "main";
            }else if($categorySelected->type=='sub'){
                $products = Product::orderBy('created_at', 'desc')
                ->where('sub_category_id', $categorySelected->id)
                ->paginate($perPage); 
                // return "sub";
            }else if($categorySelected->type=='subsub'){
                $products = Product::orderBy('created_at', 'desc')
                ->where('sub_sub_category_id', $categorySelected->id)
                ->paginate($perPage); 
                // return "sub sub";
            }
        }

  

    $firstcategories = Category::where('parent_category_id', $categorySelected->id)->where('type', 'sub')->get();
    $maincategories = Category::where('type', 'main')->get();
    $categories = Category::where('type', 'main')
    ->with('children')
    ->get();
    $categorySelectedName = $categorySelected->name;
    // return $firstcategories[0]['mame'];
    return view('shop', compact('categorySelectedName','products','firstcategories','maincategories','categories'));
    }

    //store functions
    public function showProduct($id){
        $product = Product::with('category')->find($id);
        $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
        $maincategories = Category::where('type', 'main')->get();
        $categories = Category::where('type', 'main')
        ->with('children')
        ->get();
        return view('product',compact('product','firstcategories','maincategories','categories'));
    }

    public function buyProduct($id){
        $product = Product::find($id);
        $categories = Category::where('type', 'main')
        ->with('children')
        ->get();
        $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
        $maincategories = Category::where('type', 'main')->get();
        return view('buynow',compact('product','firstcategories','maincategories','categories'));
    }

    public function orderSuccess($id){
        $order = Order::find($id);
        $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
        $maincategories = Category::where('type', 'main')->get();
        $categories = Category::where('type', 'main')
        ->with('children')
        ->get();
        return view('ordersuccess',compact('order','firstcategories','maincategories','categories'));
    }

        //
        public function showCustomerAccount(){
            $user = User::find(1);
            $categories = Category::where('type', 'main')
            ->with('children')
            ->get();
            $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
        $maincategories = Category::where('type', 'main')->get();
            return view('account',compact('user','firstcategories','maincategories','categories'));
        }

        public function contact(){
        $firstcategories = Category::where('parent_category_id', '1')->where('type', 'child')->get();
        $maincategories = Category::where('type', 'main')->get();
        $categories = Category::where('type', 'main')
        ->with('children')
        ->get();
        return view('contact','firstcategories','maincategories','categories');
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
            $incomingFieldsCustomer['user_id']=request()->get('user')->id;
    
            $customer = Customer::create($incomingFieldsCustomer);
            $customer_id = $customer->id;
            

            $incomingFieldsOrder['customer_id']=$customer_id;
            $incomingFieldsOrder['user_id']=request()->get('user')->id;
            $incomingFieldsOrder['quantity']=1;
            $incomingFieldsOrder['notes']=$incomingFields['address'];
            $incomingFieldsOrder['status']='pending';
            

            $product = Product::find($incomingFields['product_id']);
            $incomingFieldsOrder['value']=$product['price'];
            $incomingFieldsOrder['order_details']=$product['name'];

            

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
            return redirect('/ordersuccess/' . $order->id)->with('error', 'Order Added Successfully');
          
    }

        
}
