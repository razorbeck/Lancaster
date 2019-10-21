<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes;

    public $table = 'sales';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'wm_week',
        'pos_qty',
        'item_nbr',
        'pos_sales',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
