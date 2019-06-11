<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCustom extends Model
{
    use SoftDeletes;

    public $table = 'product_customs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'upc',
        'brand',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
