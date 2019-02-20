<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $filltable = ['id_pro','name_pro','id_cat','price_pro','sale_price_pro','img','description','created_pro','status_pro'];
}

