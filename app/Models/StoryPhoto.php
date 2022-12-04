<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryPhoto extends Model
{
    use HasFactory;

    protected $table = 'story_photos';

    protected $fillable = [
        'title',
        'path',
        'our_story_id'
    ];

    protected $hidden =  [
        'created_at',
        'updated_at',
    ];

    public function story()
    {
        return $this->belongsTo(OurStory::class);
    }
}
