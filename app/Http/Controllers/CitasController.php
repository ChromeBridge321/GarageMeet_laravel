<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    public function administracion()
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

        $citas = DB::table('users')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'users.id')
            ->join('citas as c', 'c.talleres_mecanicos_id', '=', 't.id')
            ->select('c.id', 'users.name', 'c.fecha_cita', 'c.estado')
            ->where('t.id', $taller)
            ->get();

        return view('citas')->with('citas', $citas);
    }

    public function web()
    {
        return view('citas_web');
    }
}
