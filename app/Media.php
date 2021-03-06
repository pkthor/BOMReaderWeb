<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * Get the chapter that this belongs to.
     */
    public function chapter()
    {
        return $this->belongsTo('App\Chapter');
    }
}
