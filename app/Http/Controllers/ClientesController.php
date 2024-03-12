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
        $personas = clientes::all();
        return view('index-clientes')->with("personas", $personas);
    }

    public function store(Request $request)
    {
        $personas = new clientes;
        $personas->nombre = $request->input('Nombre');
        $personas->telefono = $request->input('Telefono');
        $personas->correo = $request->input('Correo');
        $personas->direccion = $request->input('Direccion');
        $personas->save();
        return redirect()->back()->with('correcto', 'asdadasd');
    }


    public function update(Request $request, $id)
    {
        $personas = clientes::find($id);
        $personas->nombre = $request->input('Nombre');
        $personas->telefono = $request->input('Telefono');
        $personas->correo = $request->input('Correo');
        $personas->direccion = $request->input('Direccion');
        $personas->update();
        return redirect()->back()->with('correcto', 'asdadasd');
    }
}
