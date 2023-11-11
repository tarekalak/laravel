<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class recordsController extends Controller
{
    function index() {
        $data=Record::select('*')->orderby('id')->paginate(0);
        return view('records.records',['data'=>$data]);
    }
}
