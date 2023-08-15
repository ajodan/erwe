<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

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
        // $d['data_rt1'] = DataDiri::where('rt', 1)
        //     ->where('status_dasar', "hidup")
        //     ->select(count('id'))
        //     ->first();
        // $d['data_rt2'] = DataDiri::where('rt', 2)
        //     ->where('status_dasar', "hidup")
        //     ->get();
        // $d['data_rt3'] = DataDiri::where('rt', 3)
        //     ->where('status_dasar', "hidup")
        //     ->get();
        // $d['data_rt4'] = DataDiri::where('rt', 4)
        //     ->where('status_dasar', "hidup")
        //     ->get();

        $data_rt1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt2 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt4 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and kk_id='1' and status_dasar='hidup'"))->first();

        $label = ["RT 01", "RT 02", "RT 03", "RT 04"];

        for ($rt = 1; $rt < 5; $rt++) {
            $chartkk     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and kk_id='1' and status_dasar='hidup'"))->first();
            $jumlah_kk[] = $chartkk->jumlah;
        }

        return view('app.laporan.laporanKepalaKeluargas', compact('data_rt1', 'data_rt2', 'data_rt3', 'data_rt4', 'jumlah_kk', 'label'));
    }
}
