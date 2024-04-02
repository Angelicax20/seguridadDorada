<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'number', 'expiration_date', 'code', 'type', 'document', 'type_document', 'user_id'];
}
