<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items'; // Ensure this matches your database table name

    protected $fillable = [
        'cat_id',
        'sub_cat_id',
        'item_name',
        'price',
        'item_type',
        'item_image',
        'status'
    ];
}
