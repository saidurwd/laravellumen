<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function Index()
    {
        $customers  = Customer::all();
        return response()->json($customers);
    }

    public function createCustomer(Request $request)
    {
        $customer = Customer::create($request->all());
        return response()->json($customer);
    }

    public function updateCustomer(Request $request, $id)
    {

        $customer  = Customer::find($id);
        $customer->title = $request->input('title');
        $customer->Customer_2_code = $request->input('Customer_2_code');
        $customer->Customer_3_code = $request->input('Customer_3_code');
        $customer->status = $request->input('status');
        $customer->save();

        return response()->json($customer);
    }

    public function deleteCustomer($id)
    {
        $customer  = Customer::find($id);
        $customer->delete();

        return response()->json('Removed successfully.');
    }
}
