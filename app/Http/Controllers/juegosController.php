<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\juego;
use DB;

class juegosController extends Controller
{
    function index(){
        $resultado  =   juego::LeftJoin('users','users.id','=','juegos.id')
                                ->where('activo_jue',1)
                                ->select(DB::raw("users.name, id_jue AS juego,max_jue AS jugadores,lvl_jue AS niveles,activo_jue AS estado,fechac_jue AS creacion,fecha_jue AS modificado,(SELECT COUNT(*) FROM jugadores WHERE id_jue=juego) AS inscritos"))
                                ->get();
        if(count($resultado))
            return(['mensaje'=>'Se encontrarón datos','datos'=>$resultado]);
        else
            return(['mensaje'=>'No se encontrarón datos','datos'=>false]);
    }
    function show($id){
        $resultado  =   juego::LeftJoin('users','users.id','=','juegos.id')
                                ->select(DB::raw("users.name, id_jue AS juego,max_jue AS jugadores,lvl_jue AS niveles,activo_jue AS estado,fechac_jue AS creacion,fecha_jue AS modificado,(SELECT COUNT(*) FROM jugadores WHERE id_jue=juego) AS inscritos"))
                                ->where('juegos.id',$id)
                                ->where('activo_jue',1)
                                ->get();
        if(count($resultado))
            return(['mensaje'=>'Se encontrarón datos','datos'=>$resultado]);
        else
            return(['mensaje'=>'No se encontrarón datos','datos'=>false]);
    }
    function store(Request $entrada){
        $validator = Validator::make($entrada->all(), [
            'id_usuario'    => 'required',
            'niveles'       => 'required',
            'jugadores'     => 'required',
        ]);
        if ($validator->fails()) {
            return (['mensaje'=>'Faltan campos','datos'=>false]);
        }else{
                juego::where('activo_jue',1)->update(['activo_jue'=>0]);

                $resultado  =   new juego;
                $resultado->id      =   $entrada->id_usuario;
                $resultado->lvl_jue =   $entrada->niveles;
                $resultado->max_jue =   $entrada->jugadores;
            if($resultado->save())
                return(['mensaje'=>'Se guardó correctamsente el Juego','datos'=>true]);
            else
                return(['mensaje'=>'No se pudo guardar el Juego','datos'=>false]);
        }
    }
    function update($id_juego){
        $resultado  =   juego::find($id_juego);
        if($resultado){
            $resultado->activo_jue  =   false;
            if($resultado->save())
                return(['mensaje'=>'Se actualizó correctamente','datos'=>true]);
            else
                return(['mensaje'=>'No se pudo actualizar','datos'=>false]);

        }else{
            return(['mensaje'=>'No se encuentrá juego','datos'=>false]);
        }
    }
}
