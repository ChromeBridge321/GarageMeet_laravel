<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleados;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class EmpleadosController extends Controller
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

        $tipos_cargos = DB::table('users')
            ->join('talleres_mecanicos', 'talleres_mecanicos.users_id', '=', 'users.id')
            ->join('tipos_cargos', 'tipos_cargos.taller_id', '=', 'talleres_mecanicos.id')
            ->select('tipos_cargos.id', 'tipos_cargos.nombre')
            ->where('users.email', '=', $correo)
            ->get();


        $personas = DB::table('users')
            ->join('talleres_mecanicos', 'talleres_mecanicos.users_id', '=', 'users.id')
            ->join('personas', 'personas.taller_id', '=', 'talleres_mecanicos.id')
            ->join('empleados', 'empleados.personas_id', '=', 'personas.id')
            ->join('tipos_cargos', 'tipos_cargos.id', '=', 'empleados.tipos_cargos_id')
            ->select('personas.id', 'personas.nombre', 'personas.telefono', 'personas.correo', 'personas.direccion', 'tipos_cargos.nombre as tipo_cargo')
            ->where('users.email', '=', $correo)
            ->paginate(10);

        return view('empleados')->with('tipos_cargos', $tipos_cargos)->with("personas", $personas);
    }

    public function store(Request $request)
    {
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





            $sql2 = DB::insert("insert into empleados (id,personas_id,tipos_cargos_id) values (?,?,?) ", [
                $primer_id,
                $primer_id,
                $request->Puesto,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
            $sql2 = 0;
        }
        if ($sql == true and $sql2 == true) {
            return back()->with('correcto', 'Empleado creato exitosamente');
        } else {
            return back()->with('incorrecto', 'Parece que algo salio mal verifica los datos');
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

            $sql2 = DB::update("update empleados set tipos_cargos_id=? where id=? ", [
                $request->Puesto,
                $request->ID,

            ]);
        } catch (\Throwable $th) {
            $sql = 0;
            $sql2 = 0;
        }

        if ($sql == 0) {
            $sql = 1;
        }

        if ($sql2 == 0) {
            $sql2 = 1;
        }
        if ($sql == true and $sql2 == true) {
            return back()->with('editrue', 'persona modificado correctamente');
        } else {
            return back()->with('editfalse', 'persona modificado incorrectamente');
        }
    }

    public function delete($id)
    {
        try {
            $sql2 = DB::table('empleados')->where('id', '=', $id)->delete();
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

        $tipos_cargos = DB::table('users')
            ->join('talleres_mecanicos', 'talleres_mecanicos.users_id', '=', 'users.id')
            ->join('tipos_cargos', 'tipos_cargos.taller_id', '=', 'talleres_mecanicos.id')
            ->select('tipos_cargos.id', 'tipos_cargos.nombre')
            ->where('users.email', '=', $correo)
            ->get();


        $personas = DB::table('users')
            ->join('talleres_mecanicos', 'talleres_mecanicos.users_id', '=', 'users.id')
            ->join('personas', 'personas.taller_id', '=', 'talleres_mecanicos.id')
            ->join('empleados', 'empleados.personas_id', '=', 'personas.id')
            ->join('tipos_cargos', 'tipos_cargos.id', '=', 'empleados.tipos_cargos_id')
            ->select('personas.id', 'personas.nombre', 'personas.telefono', 'personas.correo', 'personas.direccion', 'tipos_cargos.nombre as tipo_cargo')
            ->where('users.email', '=', $correo)
            ->where('personas.nombre', 'like', "%$request->nombre%")
            ->paginate(10);

        return view('empleados')->with('tipos_cargos', $tipos_cargos)->with("personas", $personas);
    }


    public function acargo(Request $request)
    {

        $user = auth()->user()->email;

        $find = DB::table('users')
            ->join('talleres_mecanicos', 'talleres_mecanicos.users_id', '=', 'users.id')
            ->select('talleres_mecanicos.id')
            ->where('users.email', '=', $user)
            ->get();


        foreach ($find as $key => $value) {
            $taller = $value->id;
        };


        try {
            $sql = DB::insert('insert into tipos_cargos (id, nombre, taller_id) values (?, ?,?)', [
                null,
                $request->nombre,
                $taller

            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }

        if ($sql = 1) {
            return back()->with('correcto', 'Cargo creado exitosamente');
        } else {
            return back()->with('incorrecto', 'Parece que algo salio mal verifica los datos ingresados');
        }
    }

    public function ucargo(Request $request)
    {
        $sql = DB::update('update tipos_cargos set nombre = ? where id = ?', [
            $request->nombre,
            $request->id
        ]);

        return back();
    }

    public function cargodelete($id)
    {
        $sql = DB::delete(
            'delete from tipos_cargos where id = ?',
            [
                $id
            ]
        );
        return back();
    }
}
