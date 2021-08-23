<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CurrencyRate extends Model
{
    protected $table = 'currencyrate';
    protected $id = 'id';
    protected $fillable = [
        'name',
        'code',
        'symbol',
        'exchange_rate',
    ];
    protected $dates = ['created_at', 'updated_at'];
}
