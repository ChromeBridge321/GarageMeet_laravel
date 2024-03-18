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
    public function index()
    {
        $citas = DB::table('users')
            ->join('citas', 'citas.usuarios_id', '=', 'users.id')
            ->select('citas.id', 'users.name', 'citas.fecha_cita', 'citas.estado')
            ->get();

        return view('citas')->with('citas', $citas);
    }
}
