<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'address', 'cartTotal'];
    protected $primaryKey = 'ordering_id';
}
