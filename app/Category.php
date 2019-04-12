<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
	protected $primaryKey = 'id_cat';
    protected $fillable = [
        'id_cat','name_cat'
    ];
}
