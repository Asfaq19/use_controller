<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();
        $customers = Customer::all();

        return view('customers.index',compact('activeCustomers','inactiveCustomers','companies','customers'));
    }

    public function create()
    {
        $companies = Company::all();

        $customer = new Customer;

        return view('customers.create',compact('companies','customer'));
    }


    public function store(Request $request)
    {
        $data = request()->validate([

            'name' => 'required',
            'email' => 'required|email',
            'active' =>'required',
            'company_id' =>'required'
        ]);

        // $customer = new Customer;

        // dd($customer);
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->active = request('active');
        // $customer->save();
        // all to below

        Customer::create($data);

        return redirect('customers');
    }

    public function show(Customer $customer)
    {
        // dd($customer);

        // $customer = Customer::where('id',$customer)->firstOrFail();

        return view('customers.show',compact('customer'));

    }

   
    public function edit(Customer $customer)
    {
        $companies = Company::all();

        return view('customers.edit',compact('customer','companies'));
    }

   
    public function update(Request $request, Customer $customer)
    {
        $data = request()->validate([

            'name' => 'required',
            'email' => 'required|email',
            'active' =>'required',
            'company_id' =>'required'
            
        ]);

        $customer->update($data);

        return redirect('customers/'.$customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        
        return redirect('customers');
    }
}
