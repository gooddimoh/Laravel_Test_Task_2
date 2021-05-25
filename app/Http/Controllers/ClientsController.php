<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(Request $request){
        $result = $request;

        return view('result', $result);
    }

    public function store(){

    }

    public function delete(){

    }

    public function update(){

    }
}
