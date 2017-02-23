<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juego extends Model
{
    protected $table        =   'juegos';
    protected $primaryKey   =   'id_jue';
    public    $timestamps   =   false;
}
