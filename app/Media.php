<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * Get the book that this belongs to.
     */
    public function book()
    {
        return $this->belongsTo('App\Chapter');
    }
}
