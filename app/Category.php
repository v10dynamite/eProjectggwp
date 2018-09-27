<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['categoryid', 'categoryname'];
    protected $primaryKey = 'categoryid';
    public $incrementing = false;
}
