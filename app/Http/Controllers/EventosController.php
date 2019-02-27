<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use Illuminate\Support\Facades\Auth;

class EventosController extends Controller
{
    public function getIndex()
    {
        $arrayEvento = Evento::all();
        return view('eventos.index', array('arrayEventos'=> $arrayEvento));
    }

    public function getCreate()
    {
        return view('eventos.create');
    }

    public function postCreate(Request $request)
    {

        $fecha= $request->fecha;
        $ldate = date('Y-m-d H:i:s');

        $evento = new Evento();
            if ($fecha < $ldate){
                $evento->id = $request->id;
                $evento->title = $request->title;
                $evento->description = $request->description;
                $evento->date = $ldate;
                $evento->user_id = Auth::user()->id;
                $evento->save();
                return redirect('/eventos');
            }else{
                $evento->id = $request->id;
                $evento->title = $request->title;
                $evento->description = $request->description;
                $evento->date = $request->fecha;
                $evento->user_id = Auth::user()->id;
                $evento->save();
                return redirect('/eventos');
            }

    }

}
