<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['category', 'description', 'Voeding_naam', 'Voeding_wanneer'];
    public $timestamps = false;
}
