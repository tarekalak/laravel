<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class invoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Invoice::with('customers')->select('*')->orderby('id')->paginate(0);
        return view('invoices.invoices',['data'=>$data]);
    }

    function show($id) {
        $data=Invoice::where(['id'=>$id])->first();
        return view('invoices.invoicesClear',['data'=>$data]);
    }
    function clear($id) {
        $data['amountReceived']=0;
        $data['amountDue']=0;
        Invoice::where(['id'=>$id])->update($data);
        return redirect()->route('invoices');
    }
}
