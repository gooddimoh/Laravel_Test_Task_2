<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(Request $request)
    {
        $result = $request;

        return view('result', $result);
    }

    public function store(Request $request)
    {
        return "data store";

    }

    public function delete(Request $request)
    {
        return "data delete";

    }
}
