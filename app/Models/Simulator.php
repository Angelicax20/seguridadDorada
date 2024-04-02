<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulator extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'address_id', 'card_id', 'status'];
}
