<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Official extends Model implements TranslatableContract
{
    use Translatable;
    protected $fillable = ['name', 'last_name', 'email', 'collegium_id'];
    public $translatedAttributes = ['municipality'];

    public function collegium()
    {
        return $this->belongsTo('App\Models\Collegium');
    }
}
