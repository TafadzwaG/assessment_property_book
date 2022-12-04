<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurStory extends Model
{
    use HasFactory;

    
    protected $table = 'our_stories';

    protected $fillabe = [
        'story_title',
        'who_we_are',
        'vision',
        'history',
    ];

    protected $hidden =  [
        'created_at',
        'updated_at',
    ];

    public function story_photos(){
        return $this->hasMany(StoryPhoto::class);
    }
}
