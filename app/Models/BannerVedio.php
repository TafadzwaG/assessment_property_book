<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerVedio extends Model
{
    use HasFactory;

    protected $table =  'banner_vedios';

    protected $fillable = [
        'title',
        'path',
        'home_banner_id'
    ];

    protected $hidden =  [
        'created_at',
        'updated_at',
    ];


    public function banner(){
        return $this->belongsTo(HomeBanner::class);
    }


}
