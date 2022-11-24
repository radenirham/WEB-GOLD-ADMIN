<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditScoring extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = "credit_scoring";
    public $incrementing = true;

    public function user() {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function store() {
        return $this->belongsTo(Store::class, "store_id", "STORE_ID");
    }
} 
