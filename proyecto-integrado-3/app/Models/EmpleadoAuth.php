<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class EmpleadoAuth extends Authenticatable
{
    use HasFactory;
    protected $table = "empleado";

}