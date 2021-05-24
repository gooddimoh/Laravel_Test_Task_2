<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Clients;
use App\Models\Expenses;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index(){

        $ordres = new Orders();
        $clients = new Clients();
        $expenses = new Expenses();
        $employees = new Employees();

        if($employees->finance){

        }
    }

    public function store(){

    }

    public function delete(){

    }
}
