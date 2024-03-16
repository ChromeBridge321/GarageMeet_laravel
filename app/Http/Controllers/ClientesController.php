<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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

        $personas = DB::table('personas')
            ->join('clientes', 'personas.id', '=', 'clientes.personas_id')
            ->select('personas.*', 'personas.nombre', 'personas.telefono', 'personas.correo', 'personas.direccion')
            ->get();



        $primer_id = DB::table('personas')
            ->select('id', 'nombre', 'telefono', 'correo', 'direccion')
            ->orderByDesc('id')
            ->limit('1')
            ->get();

        return view('index-clientes')->with("personas", $personas)->with("primer_id", $primer_id);
    }


    public function store(Request $request)
    {
        $fechaActual = Carbon::now();
        try {
            $sql = DB::insert("insert into personas (nombre,telefono,correo,direccion,id) values (?,?,?,?,?) ", [
                $request->Nombre,
                $request->Telefono,
                $request->Correo,
                $request->Direccion,
                $request->ID,

            ]);

            $primer_id = DB::table('personas')
                ->select('id', 'nombre', 'telefono', 'correo', 'direccion')
                ->orderByDesc('id')
                ->limit('1')
                ->get();

            foreach ($primer_id as $key => $item) {
                $sql2 = DB::insert("insert into clientes (id,personas_id,talleres_mecanicos_id,Fecha_registro) values (?,?,?,?) ", [
                    $item->id,
                    $item->id,
                    1,
                    $fechaActual
                ]);
            }
        } catch (\Throwable $th) {
            $sql = 0;
            $sql2 = 0;
        }
        if ($sql == true and $sql2 == true) {
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
            $sql = DB::delete("delete from personas where id = $id");
        } catch (\Throwable $th) {
            $sql = 0;
        };

        if ($sql == true) {
            return back()->with('deletetrue', 'persona ha sido eliminada correctamente');
        } else {
            return back()->with('deletefalse', 'persona no ha sido eliminada');
        }
    }
}
