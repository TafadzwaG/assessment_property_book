<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    use HasFactory;

    protected $fillabe = [
        'title',
        'description'
    ];

    protected $hidden =  [
        'created_at',
        'updated_at',
    ];

    public function  banner_vedio(){
        return $this->hasOne(BannerVedio::class);
    }

    
}
