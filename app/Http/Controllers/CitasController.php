<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Pagination\Paginator;

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
        $correo = (auth()->user()->email);

        $citas = DB::table('users as u')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'u.id')
            ->join('citas as c', 'c.taller_id', '=', 't.id')
            ->select('c.*')
            ->where('u.email', '=', $correo)
            ->orderByRaw('fecha_cita desc, estado desc')
            ->paginate(10);

        return view('citas')->with('citas', $citas);
    }

    public function web(Request $taller)
    {
        $usuario = auth()->user();
        return view('citas_web')->with('usuario', $usuario)->with('taller', $taller);
    }

    public function agendar(Request $request)
    {

        $usuario = auth()->user()->id;


        try {
            $citas = DB::insert('insert into citas (id, nombre, correo, telefono, vehiculo, placas, observaciones, estado, fecha_cita, taller_id, usuarios_id) 
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                null,
                $request->nombre,
                $request->correo,
                $request->telefono,
                $request->vehiculo,
                "$request->placas",
                $request->observaciones,
                1,
                $request->Fecha,
                $request->taller_id,
                $usuario,
            ]);
        } catch (\Throwable $th) {
            $citas = 0;
        };

        if ($citas == true) {
            return back()->with('true', 'Cita agendada con exito');
        } else {
            return back()->with('fail', 'UPS!!! parece que algo salio mal, verifica los datos ingresados');
        }
    }

    public function search(Request $request)
    {

        $correo = (auth()->user()->email);

        $citas = DB::table('users as u')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'u.id')
            ->join('citas as c', 'c.taller_id', '=', 't.id')
            ->select('c.*')
            ->where('u.email', '=', $correo)
            ->where('c.nombre', 'like', "%$request->nombre%")
            ->orderByDesc('fecha_cita')
            ->paginate(10);

        return view('citas')->with('citas', $citas);
    }

    public function estado()
    {

        return view('citas');
    }


    public function store(Request $request)
    {




        $usuario = auth()->user()->id;

        $query = DB::table('users as u')
            ->join('talleres_mecanicos as t', 't.users_id', '=', 'u.id')
            ->select('t.id')
            ->where('u.id', '=', $usuario)
            ->get();

        foreach ($query as $key => $value) {
            $taller = $value->id;
        }

        try {
            $cita = DB::insert('insert into citas (id, Nombre, Correo, Telefono, Vehiculo, Placas, 
            estado, observaciones, fecha_cita, taller_id, usuarios_id ) values (?,?,?,?,?,?,?,?,?,?,?)', [
                null,
                $request->Nombre,
                $request->Correo,
                $request->Telefono,
                $request->Vehiculo,
                $request->Placas,
                $request->estado,
                $request->Observaciones,
                $request->Fecha,
                $taller,
                $usuario
            ]);
        } catch (\Throwable $th) {
            $cita = 0;
        }

        if ($cita == 1) {
            return back()->with('true', 'Cita agendada correctamente');
        } else {
            return back()->with('false', 'UPS!!! parece que algo salio mal, verifica los datos ingresados');
        }

        return back();
    }


    public function update(Request $request)
    {
        $fechaActual = Carbon::now();

        try {
            $citas = DB::update('update citas set Nombre=?, Correo=?, Telefono=?, Vehiculo=?, Placas=?, 
    estado=?, observaciones=?, fecha_cita=? where id=?', [

                $request->Nombre,
                $request->Correo,
                $request->Telefono,
                $request->Vehiculo,
                "$request->Placas",
                $request->estado,
                $request->Observaciones,
                $request->Fecha,
                $request->ID
            ]);
        } catch (\Throwable $th) {
            $citas = 0;
        }

        if ($citas == 0) {
            $citas = 1;
        }

        if ($citas == 1) {
            return back()->with('true', 'Cita actualizada correctamente');
        } else {
            return back()->with('false', 'UPS!!! parece que algo salio mal, verifica los datos ingresados');
        }
    }
}
