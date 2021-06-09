<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['category', 'description', 'productname', 'brand', 'model','price','maxorders','condition','approval', 'image'];
    public $timestamps = false;
}
