<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['categoryid', 'productid', 'title', 'thumbnail', 'quantity', 'price', 'description', 'description_detail'];
    protected $primaryKey = 'productid';
    public $incrementing = false;
}
