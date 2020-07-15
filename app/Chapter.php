<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    /**
     * Get the book that this belongs to.
     */
    public function book()
    {
        return $this->belongsTo('App\Book');
    }

    /**
     * Get the media for the chapter.
     */
    public function media()
    {
        return $this->hasOne('App\Media');
    }

    /**
     * Get the narrator for the chapter.
     */
    public function narrator()
    {
        return $this->hasOne('App\Narrator');
    }
}
