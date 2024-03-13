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
        try {
            $sql = DB::update("insert into personas (nombre,telefono,correo,direccion,id) values (?,?,?,?,?) ", [
                $request->Nombre,
                $request->Telefono,
                $request->Correo,
                $request->Direccion,
                $request->ID,

            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with('correcto', 'persona creo correctamente');
        } else {
            return back()->with('incorrecto', 'producto creo incorrectamente');
        }
    }


    public function update(Request $request)
    {
        try {
            $sql = DB::update("update personas set nombre=?,telefono=?,correo=?,direccion=? where id=? ", [
                $request->Nombre,
                $request->Telefono,
                $request->Correo,
                $request->Direccion,
                $request->ID,

            ]);

            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with('editrue', 'persona modificado correctamente');
        } else {
            return back()->with('editfalse', 'persona modificado incorrectamente');
        }
    }


    public function delete($id)
    {
        try {
            $sql = DB::delete("delete from personas where id=$id");

            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with('deletetrue', 'persona ha sido eliminada correctamente');
        } else {
            return back()->with('deletefalse', 'persona no ha sido eliminada');
        }
    }
}
