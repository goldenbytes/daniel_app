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
            return (['mensaje'=>'Incomplete','datos'=>false]);
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
                        return (['mensaje' => 'You got it 😆', 'datos' => true]);
                    }else
                        return(['mensaje'=>'Error!','datos'=>false]);
                }else
                    return(['mensaje'=>'No player found','datos'=>false]);
            }else{
                return(['mensaje'=>'Invalid word 🤓','datos'=>false]);
            }
        }

    }
    function index(){
        $juegos     =   juego::where('activo_jue',1)
                                ->max('id_jue');
        if($juegos) {
            $resultado = macht::leftJoin('palabras', 'palabras.id_pal', '=', 'palabra.id_pal')
                ->leftJoin('jugadores', 'palabra.id_jug', '=', 'jugadores.id_jug')
                ->where('palabra.id_jue', $juegos)
                ->select('nombre_jug AS jugador', 'nivel_jug AS nivel', 'titulo_pal AS palabra')
                ->orderby('nombre_jug')
                ->get();
            $palabras = palabra::select(DB::raw("id_pal id,titulo_pal,(SELECT COUNT(*) FROM palabra WHERE id_pal=id AND id_jue=$juegos) usada"))
                ->get();
            $todo['palabras']   =   $palabras;
            $todo['jugadores']  =   $resultado;
            return(['mensaje'=>'Se encontraron datos','datos'=>$todo]);
        }else{
            return(['mensaje'=>'No hay juegos disponibles','datos'=>false]);
        }
    }
    function show($palabra){
        $resultado  =   palabra::where('titulo_pal',$palabra)->get();
        if(count($resultado)) {
            return(['Ya existe esa palabra']);
        }else{
            $nueva  =   new palabra;
            $nueva->titulo_pal  =   $palabra;
            $nueva->save();
            return(["Se ha agregado $palabra"]);
        }
    }
    function eliminar($palabra){
        $resultado  =   palabra::where('titulo_pal',$palabra)->get();
        if(count($resultado)) {
            palabra::where('titulo_pal',$palabra)->delete();
            return(["Se eliminó $palabra"]);
        }else{
            return(["No existe $palabra"]);
        }
    }
}
