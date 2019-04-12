<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
	protected $primaryKey = 'id_ord';
    protected $fillable = [
        'id_ord','id_cus','total_price','payment','created_at','updated_at','delivery'
    ];
    protected $guarded = ['status_ord'];
}
