<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "products";
    public $timestamps = false;

    public function order()
    {
        return $this->hasMany('App\Models\order', 'product_id', 'id');
    }
}
