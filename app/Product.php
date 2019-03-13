<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
	protected $primaryKey = 'id_pro';
    protected $fillable = [
        'id_pro','name_pro','id_cat','price_pro','sale_price_pro','img','description'
    ];
    protected $guarded = ['status_cus'];
}
