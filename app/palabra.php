<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class palabra extends Model
{
    protected $table        =   'palabras';
    protected $primaryKey   =   'id_pal';
    public    $timestamps   =   false;
}
