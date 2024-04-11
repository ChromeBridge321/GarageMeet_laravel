<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class TalleresController extends Controller
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
        $talleres = DB::table('talleres_mecanicos')->get();
        return view('talleres')->with('talleres', $talleres);
    }

    public function buscar(Request $request)
    {
        $talleres = DB::table('talleres_mecanicos as t')
            ->join('municipios as m', 'm.id', 't.municipios_id')
            ->join('estados as e', 'e.id', 'm.estados_id')
            ->select('t.nombre', 't.telefono', 't.correo', 't.direccion')
            ->where('e.nombre', 'like', "%$request->nombre%")
            ->orWhere('m.nombre', 'like', "%$request->nombre%")
            ->get();
        return view('talleres')->with('talleres', $talleres);
    }
}
