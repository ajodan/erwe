<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DataDiri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DataDomisiliController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_rt1_tetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and status_ktp='Tetap' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt2_tetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and status_ktp='Tetap' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt3_tetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and status_ktp='Tetap' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt4_tetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and status_ktp='Tetap' and kk_id='1' and status_dasar='hidup'"))->first();

        $data_rt1_tidaktetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and status_ktp='Belum Tetap' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt2_tidaktetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and status_ktp='Belum Tetap' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt3_tidaktetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and status_ktp='Belum Tetap' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt4_tidaktetap = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and status_ktp='Belum Tetap' and kk_id='1' and status_dasar='hidup'"))->first();

        $label = ["RT 01", "RT 02", "RT 03", "RT 04"];

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_tetap     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and status_ktp='Tetap' and kk_id='1' and status_dasar='hidup'"))->first();
            $jumlah_tetap[] = $chart_tetap->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_tidaktetap     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and status_ktp='Belum Tetap' and kk_id='1' and status_dasar='hidup'"))->first();
            $jumlah_tidaktetap[] = $chart_tidaktetap->jumlah;
        }

        // return view('app.laporan.laporanJenisKelamins', $d);
        return view('datadomisili', compact(
            'data_rt1_tetap',
            'data_rt2_tetap',
            'data_rt3_tetap',
            'data_rt4_tetap',
            'data_rt1_tidaktetap',
            'data_rt2_tidaktetap',
            'data_rt3_tidaktetap',
            'data_rt4_tidaktetap',
            'jumlah_tetap',
            'jumlah_tidaktetap',
            'label'
        ));
    }
}
