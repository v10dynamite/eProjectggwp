<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'address', 'cartTotal', 'cartdetail'];
    // protected $cast = ['cartdetail' => 'array'];
    protected $primaryKey = 'ordering_id';
}
