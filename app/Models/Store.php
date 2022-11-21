<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = "STORE_ID";
    protected $table = "stores";
    public $incrementing = false;
} 
