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

    public function store()
    {
        return "data store";

    }

    public function delete()
    {
        return "data delete";

    }
}
