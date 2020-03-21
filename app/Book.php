<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Get the chapters for the blog post.
     */
    public function chapters()
    {
        return $this->hasMany('App\Chapter');
    }
}
