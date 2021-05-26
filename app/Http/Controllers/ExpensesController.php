<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Employees;
use App\Models\Orders;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index(Request $request){
        $orders = new Orders();
        $clients = new Clients();
        $expenses = new \App\Models\Expenses();
        $employees = new Employees();

        if($employees->data3){ }
        if($employees->data4){ }
    }

    public function result(Request $request){
        Квартал;
        Year;
        $orders = new Orders();
        $clients = new Clients();
        $expenses = new \App\Models\Expenses();
        $employees = new Employees();

        if($employees->data3){ }
        if($employees->data4){ }
    }

    public function store(Request $request){}
    public function delete(Request $request){}
    public function update(Request $request){}
}
