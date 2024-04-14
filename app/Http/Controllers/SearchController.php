<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{


    public function search(Request $request)
    {
        $term = $request->get('term');
        $query = DB::table('municipios as m')
            ->join('estados as e', 'e.id', '=', 'm.estados_id')
            ->select(DB::raw("CONCAT(m.nombre,' ',e.nombre) as nombre"))
            ->Where(DB::raw("CONCAT(m.nombre,' ',e.nombre)"), 'like', "%$term%")
            ->get();

        foreach ($query as $item) {
            $data[] = [
                'label' => $item->nombre
            ];
        };

        return $data;
    }
}
