<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['category', 'productname', 'brand', 'model','price','maxorders','condition','approval'];
    public $timestamps = false;
}
