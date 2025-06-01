<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'condition',
        'image',
        'user_id',
        'address',
        'phone'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
