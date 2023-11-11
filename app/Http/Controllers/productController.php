<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use function Laravel\Prompts\select;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Product::select('*')->orderby('id')->paginate(0);
        return view('products.products',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.productAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data    ['productName'] =     $request->productName;
        $data    ['companyName'] =     $request->companyName;
        $data    ['amount'] =          $request->amount;
        $data    ['amountOne'] =       $request->amount*$request->amountOne;
        $data    ['purchasingPrice'] = $request->purchasingPrice;
        $data    ['sellingPrice'] =    $request->sellingPrice;
        $data    ['created_at'] = date('Y/m/d H:m:s');
        Product::create($data);

        // INVOICES 
        return redirect()->route('prodIndex');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Product::select('*')->where(['id'=>$id])->first();
        return view('products.productUpdate',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        $data   ['productName']     = $request->productName;
        $data   ['companyName']     = $request->companyName;
        $data   ['amount']          = $request->amount;
        $data   ['amountOne']       = $request->amountOne*$request->amount;
        $data   ['purchasingPrice'] = $request->purchasingPrice;
        $data   ['sellingPrice']    = $request->sellingPrice;
        $data   ['updated_at']      = date('Y/m/d H:m:s');
        Product::where(['id'=>$id])->update($data);
        return redirect()->route('prodIndex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function show(string $id)
    {
        $data=Product::select('*')->where(['id'=>$id])->first();
        return view('products.productdelete',['data'=>$data]);
    }

     public function destroy(string $id)
    {
        Product::where(['id'=>$id])->delete();
        return redirect()->route('prodIndex');
    }

    public function amountCreate() {
        $data=Product::select('*')->orderby('id')->paginate(0);
        return view('products.productAmount',['data'=>$data]);
    }

    public function amountStore(request $request) {
        $amount=Product::where(['id'=>$request->id])->value('amount');
        $amountOne=Product::where(['id'=>$request->id])->value('amountOne');
        $data['amount'] =$request->amount+$amount;
        $data['amountOne'] =$request->amount*($amountOne/$amount)+$amountOne;
        Product::where(['id'=>$request->id])->update($data);
        return redirect()->route('prodIndex');
    }

}
