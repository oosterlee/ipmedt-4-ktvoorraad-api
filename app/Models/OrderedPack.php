<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedPack extends Model
{
    use HasFactory;

    protected $table = "ordered_pack";

    public function pack() {
    	return $this->belongsTo(Pack::class, 'pack_id', 'uuid');
    }

    public function user() {
    	return $this->belongsTo(User::class);
    }
}
