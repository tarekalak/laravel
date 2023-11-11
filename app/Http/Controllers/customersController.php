<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Invoice;

class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Customer::select('*')->orderby('id')->paginate(0);
       return view('customers.customers',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Customer::select('*')->orderby('id')->paginate(0);
        return view('customers.customerCreate',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data    ['customerName'] = $request->customerName;
        $data    ['customerNumber'] =    $request->customerNumber;
        $data    ['customerLocation'] = $request->customerLocation;
        $data    ['count'] = 0;
        $data    ['created_at'] = date('Y/m/d H:m:s');
        Customer::create($data);

        // make invoice for the customer
        $info['customerId']=Customer::where(['customerName'=>$request->customerName])->value('id');
        $info['amountReceived']=0;
        $info['amountDue']=0;
        Invoice::create($info);
        return redirect()->route('custIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Customer::select('*')->where(['id'=>$id])->first();
        return view('customers.customerUpdate',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data   ['customerName'] = $request->customerName;
        $data   ['customerNumber']    = $request->customerNumber;
        $data    ['customerLocation'] = $request->customerLocation;
        $data   ['updated_at']      = date('Y/m/d H:m:s');
        Customer::where(['id'=>$id])->update($data);
        return redirect()->route('custIndex');
    }
/**
 * show letter before destroy
 */

    public function show(string $id)
    {
        $data=Customer::select('*')->where(['id'=>$id])->first();
        return view('customers.customerdelete',['data'=>$data]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::where(['id'=>$id])->delete();
        return redirect()->route('custIndex');
    }
}
