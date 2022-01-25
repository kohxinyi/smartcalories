<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    protected $table = 'summaries';
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function profile() {
        return $this->belongsTo('App\Profile', 'profile_id');
    }
}
