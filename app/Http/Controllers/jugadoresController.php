<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\jugador;
use App\juego;
use Carbon\Carbon;

class jugadoresController extends Controller
{
    function store(Request $entrada){
        $validator = Validator::make($entrada->all(), [
            'nombre'    => 'required',
        ]);
        if ($validator->fails()) {
            return (['mensaje'=>'Faltan campos','datos'=>false]);
        }else{
            $juegos =   juego::where('activo_jue',1)
                                ->max('id_jue');
            if($juegos){
                $juego_diponible=juego::find($juegos);
                $jugadores      =jugador::where('id_jue',$juegos)
                                            ->count();
                $diponibles=$juego_diponible->max_jue-$jugadores;
                if($diponibles){
                    $resultado              =   new jugador;
                    $resultado->id_jue      =   $juegos;
                    $resultado->nombre_jug  =   $entrada->nombre;
                    if($resultado->save()) {
                        session()->regenerate();
                        session()->put('id_jugador',$resultado->id_jug);
                        //Session::put('id_jugador',$resultado->id_jug);
                        //session()->put(['id_jugador' => $resultado->id_jug]);
                        return (['mensaje' => 'Se registro correctamente', 'datos' => $resultado->id_jug]);
                    }else
                        return(['mensaje'=>'No se pudo registrar','datos'=>false]);
                }else{
                    return(['mensaje'=>'No puedes inscribirte','datos'=>['diponibles'=>$jugadores]]);
                }
            }else{
                return(['mensaje'=>'No se encontro juegos disponibles','datos'=>false]);
            }
        }
    }
    function index(){
        $juegos =   juego::where('activo_jue',1)
            ->max('id_jue');
        if($juegos){
            $juego_diponible=juego::find($juegos);
            $jugadores      =jugador::where('id_jue',$juegos)
                ->count();
            $diponibles=$juego_diponible->max_jue-$jugadores;
            if($diponibles)
                return(['mensaje'=>'Hay cupos','datos'=>$diponibles]);
            else
                return(['mensaje'=>'No hay cupos','datos'=>false]);
        }else
            return(['mensaje'=>'No se encontro juegos disponibles','datos'=>false]);

    }
    function show($id_jugador){
        $juegos =   juego::where('activo_jue',1)
            ->max('id_jue');
        if($juegos){
            $juego_diponible=juego::find($juegos);
            $jugadores      =jugador::where('id_jue',$juegos)
                                    ->orderBy('nivel_jug', 'desc')->get();
            if(count($jugadores)) {
                foreach ($jugadores as $aux) {
                    $html = 0;
                    if ($aux->id_jug == $id_jugador)
                        $html = 1;
                    $resultado['nombre']          = $aux->nombre_jug;
                    $resultado['estado']          = $html;
                    $resultado['nivel']           = $aux->nivel_jug;
                    $resultado['nivel_max']       = $juego_diponible->max_jue;
                    $resultado['tiempo_juego']    = $juego_diponible->fechac_jue;
                    $resultado['tiempo_jugador']  = $aux->actualizacion_jug;
                    //$resultado['va']              =date($juego_diponible->fechac_jue)-date($aux->actualizacion_jug);

                    $res[]=$resultado;
                }
                return (['mensaje' => 'Lista de avance', 'datos' => $res]);
            }else
                return (['mensaje' => 'No hay jugadores', 'datos' => false]);

        }else
            return(['mensaje'=>'No se encontro juegos disponibles','datos'=>false]);

    }


}
