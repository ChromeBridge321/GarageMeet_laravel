<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
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
        $datos = DB::select('select * from personas order by id desc');
        return view('index-clientes')->with("datos", $datos);
    }

    public function store(Request $request)
    {
        $personas = new clientes;
        $personas->nombre = $request->input('Nombre');
        $personas->telefono = $request->input('Telefono');
        $personas->correo = $request->input('Correo');
        $personas->direccion = $request->input('Direccion');
        $personas->save();
        return redirect()->back();
    }
}
