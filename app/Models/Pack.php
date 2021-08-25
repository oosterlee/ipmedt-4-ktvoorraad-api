<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;
    // use \App\Http\Traits\UsesUuid;

    protected $table = 'pack';

    public function products() {
    	return $this->hasMany(PackProduct::class, 'pack_id', 'uuid');
    }
}
