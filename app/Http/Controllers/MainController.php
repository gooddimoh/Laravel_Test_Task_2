<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
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

    public function form_data()
    {
        return "data data";
    }

    public function delete(){

    }

    public function update(){

    }
}
