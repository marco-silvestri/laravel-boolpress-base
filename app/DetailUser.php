<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    protected $fillable = [
        'user_id',
        'address',
        'phone'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public $timestamps = false;
}
