<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Record;
use Illuminate\Http\Request;
use App\Models\Sale;

class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data=Sale::with('customers')->with('products')->select('*')->orderby('id')->paginate(0);
        return view('sales.sales',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cust=Customer::select('*')->orderby('id')->paginate(0);
        $prod=Product::select('*')->orderby('id')->paginate(0);

        return view('sales.salesCreate',['cust'=>$cust,'prod'=>$prod]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products=Product::where(['id'=>$request->productId]);
        $customers=Customer::where(['id'=>$request->customerId]);
        $invoices=Invoice::where(['customerId'=>$request->customerId]);
        $records=Record::where(['customerId'=>$request->customerId]);
        /** Decrease the amount taken */
        $colcamount['amountOne'] =$products->value('amountOne')-$request->amount;

        if($colcamount['amountOne']<0)//Check if the quantity is enough
            return redirect()->route('sales');

        $colcamount['amount']=$colcamount['amountOne']/($products->value('amountOne')/$products->value('amount'));
        $products->update($colcamount);


        // create sales
        $data    ['customerId']      =  $request->customerId;
        $data    ['productId']       =  $request->productId;
        $data    ['amount']          =  $request->amount;
        $data    ['amountDue']       =  $products->value('sellingPrice')*$request->amount;
        $data    ['payment']         =  $request->payment;
        Sale::create($data);

        // update mount
        $colcmount['mount']=($customers->value('mount')+$data['amountDue']-$data['payment']);//mount=mount+amountDue
        $customers->update($colcmount);

        //INVOICES

        $invoicesData['amountReceived']=$invoices->value('amountReceived')+$request->payment;
        $invoicesData['amountDue']     =$invoices->value('amountDue')+$data['amountDue'];
        $invoices->update($invoicesData);

        //RECORDS

        $record['customerId']= $data    ['customerId'];
        $record['productId']= $data    ['productId'] ;
        $record['type']=false;
        $record['amount']=$data    ['amount'];
        $record['amountReceived']=$data    ['payment'];
        $record['amountDue']=$data    ['amountDue'];
        $record['remainder']=$data    ['amountDue']-$data['payment'];
        $record['totalRemainder']=$colcmount['mount'];

        $record['created_at']=date('Y/m/d');
        Record::create($record);
        return redirect()->route('sales');
    }


    public function show(string $id)
    {
        $data=Sale::select('*')->where(['id'=>$id])->first();
        return view('sales.salesDelete',['data'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sale::where(['id'=>$id])->delete();
        return redirect()->route('sales');

    }
}
