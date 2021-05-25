<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Employees;
use App\Models\Orders;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index(){
        $orders = new Orders();
        $clients = new Clients();
        $expenses = new \App\Models\Expenses();
        $employees = new Employees();

        if($employees->data3){ }
        if($employees->data4){ }
    }

    public function result(){
        Квартал;
        Year;
        $orders = new Orders();
        $clients = new Clients();
        $expenses = new \App\Models\Expenses();
        $employees = new Employees();

        if($employees->data3){ }
        if($employees->data4){ }
    }

    public function store(){

    }

    public function delete(){

    }

    public function update(){

    }
}
