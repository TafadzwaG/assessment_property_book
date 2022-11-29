<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillabe = [
        'title',
        'price_id'
    ];

    protected $hidden =  [
        'created_at',
        'updated_at',
    ];


    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
