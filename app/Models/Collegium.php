<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Collegium extends Model implements TranslatableContract
{
    use Translatable;
    protected $table = 'collegiums';
    protected $fillable = ['filename', 'filetype', 'filesize', 'filepath', 'image'];
    public $translatedAttributes = ['title', 'description'];

    public function officials()
    {
        return $this->hasMany('App\Models\Official');
    }
}
