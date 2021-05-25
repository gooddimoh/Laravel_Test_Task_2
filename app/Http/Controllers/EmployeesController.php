<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Clients;
use App\Models\Expenses;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index()
    {


        // worker_type_1
        // worker_type_2
        // worker_type_3

        // order_ +1;

        // best_worker + 1 + $200
        //
        // best worker where clients more than 30 + $300
        //
        // quartal always 3 month
        //
        // select with dates type1
        // select with dates type2

        //get post put delete

        $ordres = new Orders();
        $clients = new Clients();
        $expenses = new Expenses();
        $employees = new Employees();

//        $func = function anonim() {
//            return "";
//        }

        if ($employees->data3) {
        }
        if ($employees->data4) {
        }

        $order = "";
        $sallary = 500;
        if ($order + 1) {
            $sallary = $order * 3 + " %";
        }
        $sallary = 200;
        $sallary = 300;
    }

    public function store()
    {
    }

    public function update(){

    }
}
