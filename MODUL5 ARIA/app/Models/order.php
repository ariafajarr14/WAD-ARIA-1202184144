<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = "orders";
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App\Models\product', 'product_id', 'id');
    }
}
