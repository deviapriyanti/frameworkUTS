<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Products';
    protected $fillable = ['name', 'description', 'price', 'image', 'category_id', 'expired_at', 'modified_by', 'created_at', 'updated_at'];
}
