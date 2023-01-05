<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = array('tittle' => 'Data Customer');
        return view('customer.index', $data);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show ()
    {
        //
    }
    public function edit()
    {
        $data = array('tittle' => 'Form Edit Customer');
        return view('customer.edit', $data);
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destory()
    {
        //
    }
}
