<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackProduct extends Model
{
    use HasFactory;

    protected $table = "pack_product";

    public function product() {
    	return $this->belongsTo(products::class);
    }
}
