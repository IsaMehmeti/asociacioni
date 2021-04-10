<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Official extends Model 
{
    protected $fillable = ['name', 'last_name', 'email', 'collegium_id', 'municipality_id'];

    public function collegium()
    {
        return $this->belongsTo('App\Models\Collegium');
    }
    public function municipality()
    {
        return $this->belongsTo('App\Models\Municipality');
    }
}
