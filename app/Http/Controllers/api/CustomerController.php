<?php

namespace App\Http\Controllers\api;

use App\Models\Customer;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class CustomerController extends Controller
{
    //

        public function index()
    {
        $userid = auth()->user()->id;
        $customers = Customer::where('user_id', $userid)->get();

        //return $users;
        //dd($sales);
        // $Customers = TargetGroup::withTrashed();

        return response()->json(['customers' => $customers]);
    }

    public function showCustomer($id){
        $customer = Customer::find($id);
        return response()->json(['customer'=>$customer]);
    }


    public function saveCustomer(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => ['required', 'string', 'min:10', 'max:20', new PhoneNumber],
            'email' => 'nullable|email|unique:users,email',
            'password' => [
                'nullable',
                'string',
                'min:8',
                'max:255',
                Password::min(8)->letters()->numbers()
            ],
        ]);

        $user = new Customer();
        $user->name = strip_tags($validated['name']);
        $user->phone = strip_tags($validated['phone']);
        $user->email = isset($validated['email']) ? strip_tags($validated['email']) : null;

        if (!empty($validated['password'])) {
            $user->password = Hash::make(strip_tags($validated['password']));
        }

        $user->usertype = 'customer';
        $user->status = 'active';

        $user->save();

        $customerStatus=array(
            "message" => "Customer Added Successfully",
            "customerId" => $user->id,
            "status" => "success");

        return response()->json($customerStatus);

        // return response()->json(['message' => 'Customer created successfully',  "tripId" => $trip->id,"status" => "success"], 201);
    }
}
