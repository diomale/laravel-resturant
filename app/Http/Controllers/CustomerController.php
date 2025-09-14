<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function getAllCustomers()
    {
        $customerData = Customer::all();

        return $customerData;
    }


    public function showAllCustomers()
    {
        $customerData = $this->getAllCustomers();

        return view('home',
         compact('customerData'));
    }
}

