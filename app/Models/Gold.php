<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gold extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = "GOLD_ID";
    protected $table = "golds";
    public $incrementing = false;

    public function manufacture() {
        return $this->belongsTo(Manufacture::class, "manufacture_id", "id");
    }
} 
