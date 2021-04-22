<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Official extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'last_name', 'email', 'collegium_id', 'municipality_id', 'headship'];

    public function collegium()
    {
        return $this->belongsTo('App\Models\Collegium');
    }
    public function municipality()
    {
        return $this->belongsTo('App\Models\Municipality');
    }

    public function isOnHeadShip()
    {
        if ($this->headship == true){
            return true;
        }
        return false;

    }
    public function headship()
    {
        return $this->where('headship', true)->get();

    }
}
