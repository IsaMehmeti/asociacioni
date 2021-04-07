<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Official extends Model implements TranslatableContract
{
    use Translatable;
//    protected $fillable = ['name', 'surname', 'email'];
//'municipality_id', 'collegium_id',
    public $translatedAttributes = ['name'];
}
