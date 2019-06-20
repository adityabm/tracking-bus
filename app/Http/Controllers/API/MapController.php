<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Rute;

class MapController extends Controller
{
    public function asal()
    {
        $rute = Rute::selectRaw('DISTINCT asal')->pluck('asal');

        return response()->json($rute);
    }

    public function tujuan(Request $request)
    {
        $rute = Rute::selectRaw('DISTINCT tujuan')->where('asal',$request->asal)->pluck('tujuan');

        return response()->json($rute);
    }

    public function rute(Request $request)
    {
        $rute = Rute::where('asal',$request->asal)->where('tujuan',$request->tujuan)->first();

        if(!$rute){
            return response()->json(false);
        }

        return response()->json($rute);
    }
}
