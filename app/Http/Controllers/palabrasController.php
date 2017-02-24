<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\palabra;
use App\juego;
use App\macht;
use App\jugador;
use DB;

class palabrasController extends Controller
{

    function store(Request $entrada){
        $validator = Validator::make($entrada->all(), [
            'palabra'    => 'required',
            'id_jugador' => 'required',
        ]);
        if ($validator->fails()) {
            return (['mensaje'=>'Faltan campos','datos'=>false]);
        }else{
            $juegos =   juego::where('activo_jue',1)
                ->max('id_jue');
            $busqueda   =   palabra::where('titulo_pal',$entrada->palabra)
                                        ->select(DB::raw("id_pal pal,(SELECT COUNT(*) FROM palabra WHERE id_pal=pal AND id_jue=$juegos) usado"))->get();
            if(count($busqueda) && !$busqueda[0]->usado) {
                $jugador    =   jugador::find($entrada->id_jugador);
                if($jugador){
                    $resultado = new macht;
                    $resultado->id_jue = $juegos;
                    $resultado->id_jug = $entrada->id_jugador;
                    $resultado->id_pal = $busqueda[0]->pal;
                    if ($resultado->save()){
                        $jugador->nivel_jug=$jugador->nivel_jug+1;
                        $jugador->save();
                        return (['mensaje' => 'Palabra valida', 'datos' => true]);
                    }else
                        return(['mensaje'=>'Ocurrio un error','datos'=>false]);
                }else
                    return(['mensaje'=>'No exixste el jugador','datos'=>false]);
            }else{
                return(['mensaje'=>'Palabra no valida','datos'=>false]);
            }
        }

    }
}
