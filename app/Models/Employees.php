<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $param1 = "param1";
    private $param2 = "param2";
    public $param3 = "param3";
    public $param4 = "param4";

}
