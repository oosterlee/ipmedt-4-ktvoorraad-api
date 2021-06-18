<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordered_products extends Model
{
    use HasFactory;
    protected $table = "ordered_products";
    protected $fillable = ['productname', 'besteld_door', 'brand', 'model','price', 'aantal'];
    public $timestamps = false;
}
