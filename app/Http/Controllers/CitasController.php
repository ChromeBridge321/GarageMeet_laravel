<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CitasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $correo = (auth()->user()->email);

        $subquery = DB::table('users')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'users.id')
            ->select('t.id')
            ->where('users.email', '=', $correo)
            ->get();

        foreach ($subquery as $value) {
            $taller = $value->id;
        }

        $citas = DB::table('citas')
            ->where('taller_id', '=', $taller)
            ->get();
        return view('citas')->with('citas', $citas);
    }

    public function web(Request $taller)
    {
        $usuario = auth()->user();
        return view('citas_web')->with('usuario', $usuario)->with('taller', $taller);
    }

    public function agendar(Request $request)
    {

        $fechaActual = Carbon::now();
        $usuario = auth()->user()->id;


        try {
            $citas = DB::insert('insert into citas (id, nombre, correo, telefono, vehiculo, placas, observaciones, estado, fecha_cita, taller_id, usuarios_id) 
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                null,
                $request->nombre,
                $request->correo,
                $request->telefono,
                $request->vehiculo,
                "$request->placas",
                $request->observaciones,
                1,
                $fechaActual,
                $request->taller_id,
                $usuario,
            ]);
        } catch (\Throwable $th) {
            $citas = 0;
        };

        if ($citas == true) {
            return back()->with('true', 'Cita realizada con exito');
        } else {
            return back()->with('fail', 'Parace que algo salio mal');
        }
    }
}
