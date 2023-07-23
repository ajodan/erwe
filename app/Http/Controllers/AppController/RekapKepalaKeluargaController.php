<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;
use Str;

use\App\Model\Datadiri;


class RekapKepalaKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $d['data_rt1'] = DataDiri::where('rt', 1)
            ->where('status_dasar', "hidup")
            ->get();
        $d['data_rt2'] = DataDiri::where('rt', 2)
            ->where('status_dasar', "hidup")
            ->get();
        $d['data_rt3'] = DataDiri::where('rt', 3)
            ->where('status_dasar', "hidup")
            ->get();
        $d['data_rt4'] = DataDiri::where('rt', 4)
            ->where('status_dasar', "hidup")
            ->get();

        return view('app.laporan.laporanKepalaKeluargas', $d);
    }
}
