<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return $customer;
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return $customer;
    }

    public function store($code_customer, $name, $email, $country, $city, $address, $contact_number)
    {
        $customer = new Customer();
        $customer->code_customer = $code_customer;
        $customer->name = $name;
        $customer->email = $email;
        $customer->country = $country;
        $customer->city = $city;
        $customer->address = $address;
        $customer->contact_number = $contact_number;
        $customer->save(); 
        return $customer;
    }

    public function update($id, $code_customer, $name, $email, $country, $city, $address, $contact_number)
    {
        $customer = Customer::find($id);
        $customer->code_customer = $code_customer;
        $customer->name = $name;
        $customer->email = $email;
        $customer->country = $country;
        $customer->city = $city;
        $customer->address = $address;
        $customer->contact_number = $contact_number;
        $customer->save(); 
        return $customer;
    }

    public function delete($code_customer)
    {
        $customer = Customer::find($code_customer);
        $customer->delete();
        return $customer;
    }
}
