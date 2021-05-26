<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(Request $request){
        $result = $request;

        return view('result', $result);
    }

    public function store(Request $request){

    }

    public function delete(Request $request){

    }

    public function update(Request $request){

    }
}
