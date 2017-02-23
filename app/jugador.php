<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    protected $table        =   'jugadores';
    protected $primaryKey   =   'id_jug';
    public    $timestamps   =   false;
}
