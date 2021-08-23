<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $id = 'id';
    protected $fillable = [
        'title',
        'name',
        'description',
        'amount',
    ];
    protected $dates = ['created_at', 'updated_at'];

    public function student(){
        return $this->belongsTo(\App\Models\Student::class);
    }
}
