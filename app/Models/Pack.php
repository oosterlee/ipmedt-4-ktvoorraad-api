<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $table = 'pack';

    public function products() {
    	return $this->hasMany(PackProduct::class);
    }
}
