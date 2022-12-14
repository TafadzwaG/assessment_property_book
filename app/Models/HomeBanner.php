<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    use HasFactory;

    protected $table = 'home_banners';

    protected $fillabe = [
        'title',
        'description'
    ];

    protected $hidden =  [
        'created_at',
        'updated_at',
    ];

    public function  banner_images(){
        return $this->hasOne(BannerVedio::class);
    }

    
}
