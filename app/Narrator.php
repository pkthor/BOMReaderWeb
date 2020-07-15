<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Narrator extends Model
{
    /**
     * Get the chapter that this belongs to.
     */
    public function chapter()
    {
        return $this->belongsTo('App\Chapter');
    }
}
