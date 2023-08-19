<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Str;

use\App\Model\Datadiri;

use Illuminate\Support\Facades\Auth;


class RekapRtDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rt = Auth::user()->rt;
        $data_tetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and status_ktp='Tetap' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_belumtetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and status_ktp='Belum Tetap' and kk_id='1' and status_dasar='hidup'"))->first();

        $label = ["Tetap", "Belum Tetap"];

        for ($agama = 1; $agama < 8; $agama++) {
            $chart_agama     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where status_ktp='$agama' and rt='$rt' and status_dasar='hidup'"))->first();
            $jumlah_agama[] = $chart_agama->jumlah;
        }


        return view('app.rekaprt.rekapDomisiliKks', compact(
            'data_tetap',
            'data_belumtetap',
            'jumlah_agama',
            'label'
        ));
    }
}
