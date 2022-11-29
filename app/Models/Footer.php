<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table =  'footers';

    protected $fillable = [
        'title',
        'description',
    ];

    protected $hidden =  [
        'created_at',
        'updated_at',
    ];
}
