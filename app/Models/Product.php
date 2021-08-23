<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $id = 'id';
    protected $fillable = [
        'p_title',
        'p_name',
        'p_description',
        'p_amount',
    ];
    protected $dates = ['created_at', 'updated_at'];

    public function student(){
        return $this->belongsTo(\App\Models\Student::class);
    }
}
