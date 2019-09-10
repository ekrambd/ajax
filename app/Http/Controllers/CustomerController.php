<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CustomerController extends Controller
{
    public function index()
    {
    	return view('customer');
    }

    public function Save(Request $request)
    {
    	$data = array();
    	$data['name'] = $request->name;
    	$data['phone'] = $request->phone;
    	$data['address'] = $request->address;
    	echo "<pre>";
    	print_r($data);
    }
}
