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

    public function form_data(Request $request){
        return "data data";
    }

    public function store(Request $request){
        return "data store";
    }

    public function delete(Request $request){

    }

    public function update(Request $request){

    }
}
