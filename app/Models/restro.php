<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restro extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $filleble=['name','email','address'];
}
