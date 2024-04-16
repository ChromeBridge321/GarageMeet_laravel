<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Pagination\Paginator;

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
        $correo = (auth()->user()->email);

        $personas = DB::table('users as u')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'u.id')
            ->join('personas as p', 'p.taller_id', '=', 't.id')
            ->join('clientes as c', 'c.personas_id', '=', 'p.id')
            ->select('p.*')
            ->where('u.email', '=', $correo)
            ->paginate(10);

        return view('clientes')->with("personas", $personas);
    }


    public function store(Request $request)
    {
        $fechaActual = Carbon::now();
        $correo = (auth()->user()->email);

        $find = DB::table('users')
            ->join('talleres_mecanicos', 'talleres_mecanicos.users_id', '=', 'users.id')
            ->select('talleres_mecanicos.id')
            ->where('users.email', '=', $correo)
            ->get();


        foreach ($find as $key => $value) {
            $taller = $value->id;
        };

        try {
            $sql = DB::insert("insert into personas (nombre,telefono,correo,direccion,id,taller_id) values (?,?,?,?,?,?) ", [
                $request->Nombre,
                $request->Telefono,
                $request->Correo,
                $request->Direccion,
                null,
                $taller,

            ]);

            $find_2 = DB::table('users')
                ->join('talleres_mecanicos', 'talleres_mecanicos.users_id', '=', 'users.id')
                ->join('personas', 'personas.taller_id', '=', 'talleres_mecanicos.id')
                ->select('personas.id')
                ->where('users.email', '=', $correo)
                ->orderByDesc('id')
                ->limit('1')
                ->get();

            foreach ($find_2 as $key => $value) {
                $primer_id = $value->id;
            };

            $sql2 = DB::insert("insert into clientes (id,personas_id,Fecha_registro) values (?,?,?) ", [
                $primer_id,
                $primer_id,
                $fechaActual
            ]);
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
            $sql2 = DB::table('clientes')->where('id', '=', $id)->delete();
            $sql = DB::table('personas')->where('id', '=', $id)->delete();
        } catch (\Throwable $th) {
            $sql = 0;
            $sql2 = 0;
        };

        if ($sql == true and $sql2 == true) {
            return back()->with('deletetrue', 'persona ha sido eliminada correctamente');
        } else {
            return back()->with('deletefalse', 'persona no ha sido eliminada');
        }
    }


    public function search(Request $request)
    {

        $correo = (auth()->user()->email);

        $personas = DB::table('users as u')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'u.id')
            ->join('personas as p', 'p.taller_id', '=', 't.id')
            ->join('clientes as c', 'c.personas_id', '=', 'p.id')
            ->select('p.*')
            ->where('u.email', '=', $correo)
            ->where('p.nombre', 'like', "%$request->nombre%")
            ->paginate(10);

        return view('clientes')->with("personas", $personas);
    }
}
