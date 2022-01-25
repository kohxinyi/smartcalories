<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    protected $table = 'weights';
    // protected $primaryKey = 'id';
    protected $guarded = [];

    // protected $fillable = [
	// 	'weight', 'date',
	// ];

    // public function profiles()
    // {
    //     return $this->belongsTo('App\Profile', 'profile_id');
    // }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
