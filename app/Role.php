<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // get the user of this role

    public function user() {
        return $this->belongsTo('App\User');
    }
}
