<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function weights(){
        // return $this->hasMany('App\Weight');
        return $this->hasMany(Weight::class);
    }
}
