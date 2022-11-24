<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = "bnr_id";
    protected $table = "banner";
    public $incrementing = true;

} 
