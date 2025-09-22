<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showAllCustomers()
    {
        $customerData = Customer::all();
        return view('home', compact('customerData'));
    }

    public function saveCustomer(Request $request)
    {
        $validated = $request->validate([
            'cust_name'    => 'required|string|max:255',
            'cust_address' => 'required|string|max:255',
        ]);

        Customer::create($validated);

        return redirect('/home')->with('success', 'Customer added successfully!');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect('/home')->with('success', 'Customer deleted successfully!');
    }

    public function edit($id)
{
    $customer = Customer::findOrFail($id);
    return view('edit', compact('customer'));
}

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'cust_name'    => 'required|string|max:255',
            'cust_address' => 'required|string|max:255',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($validated);

        return redirect('/home')->with('success', 'Customer updated successfully!');
    }

}


