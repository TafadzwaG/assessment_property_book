<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = 'prices';

    protected $fillable = [
        'type',
        'description',
        'price'
    ];

    protected $hidden =  [
        'created_at',
        'updated_at',
    ];


    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
