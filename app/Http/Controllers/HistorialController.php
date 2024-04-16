<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class HistorialController extends Controller
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
        $usuario = auth()->user();

        $find = DB::table('users as u')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'u.id')
            ->where('u.id', '=', $usuario->id)
            ->select('t.id')
            ->get();

        foreach ($find as $key => $value) {
            $taller = $value->id;
        }

        $servicio = DB::table('users as u')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'u.id')
            ->join('servicios as s', 's.taller_id', '=', 't.id')
            ->select('s.*')
            ->where('t.id', '=', $taller)
            ->paginate(10);

        return view('historial')->with('servicio', $servicio);
    }

    public function store(Request $request)
    {

        $usuario = auth()->user();

        $find = DB::table('users as u')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'u.id')
            ->where('u.id', '=', $usuario->id)
            ->select('t.id')
            ->get();

        foreach ($find as $key => $value) {
            $taller = $value->id;
        }


        try {
            $sql = DB::insert('insert into servicios (id, nombre, taller_id, vehiculo, fecha_servicio, Servicios, Placas)
         values (?,?,?,?,?,?,?)', [
                null,
                $request->Nombre,
                $taller,
                $request->Vehiculo,
                $request->Fecha,
                $request->Servicios,
                $request->Placas
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }

        if ($sql == 1) {
            return back()->with('true', 'Servicio creado correctamente');
        } else {
            return back()->with('false', 'UPS!!! parece que algo salio mal, verifica los datos ingresados');
        }
    }

    public function delete($id)
    {

        try {
            $sql = DB::delete('delete from servicios where id = ?', [$id]);
        } catch (\Throwable $th) {
            $dql = 0;
        }

        if ($sql == 1) {
            return back()->with('true', 'Servicio eliminado correctamente');
        } else {
            return back()->with('false', 'UPS!!! parece que algo salio mal, intentalo de nuevo');
        }
    }

    public function update(Request $request)
    {
        try {
            $sql = DB::update('update servicios set nombre=?, taller_id=?, vehiculo=?, fecha_servicio=?, Servicios=?, Placas=? where id = ?', [

                $request->Nombre,
                $request->Vehiculo,
                $request->Fecha,
                $request->Servicios,
                $request->Placas,
                $request->id
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }

        if ($sql == 0) {
            $sql = 1;
        }

        if ($sql == 1) {
            return back()->with('true', 'Servicio actualizado correctamente');
        } else {
            return back()->with('false', 'UPS!!! parece que algo salio mal, intentalo de nuevo');
        }
    }
}
