<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'ord_detail';
	protected $primaryKey = ['id_ord','id_pro'];
    protected $fillable = [
        'id_pro','id_ord','quantity','price_pro','sale_price_pro','created_at','updated_at'
    ];
}
