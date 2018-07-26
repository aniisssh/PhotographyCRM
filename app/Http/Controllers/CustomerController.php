<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerFormRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('customers.index',[
             'customers'=>Customer::all()
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerFormRequest $request)
    {
        $customer=new Customer();
        $customer->first_name=$request->input('first_name');
        $customer->last_name=$request->input('last_name');
        $customer->email=$request->input('email');
        $customer->contact_no=$request->input('contact_no');
        
         if($request->has('photo')){
           $file=$request->file('photo');
           $customer->photo=$file->store('public/customers');
        }
        $customer->bio=$request->input('bio');
        $customer->status=1;
        $customer->save();

        return redirect('admin/customers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::findOrFail($id);
        return view('customers.edit',[
            'customer'=>$customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerFormRequest $request, Customer $customer)
    {
        $customer->first_name=$request->input('first_name');
        $customer->last_name=$request->input('last_name');
        $customer->email=$request->input('email');
        $customer->contact_no=$request->input('contact_no');
        
         if($request->has('photo')){
           $file=$request->file('photo');
           $customer->photo=$file->store('public/customers');
        }
        $customer->bio=$request->input('bio');
        $customer->status=1;
        $customer->save();

        return redirect('admin/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
