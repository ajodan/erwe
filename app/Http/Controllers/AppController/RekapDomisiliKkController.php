<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Str;

use App\Model\Datadiri;


class RekapDomisiliKkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $d['data_rt1'] = DataDiri::where('rt', 1)
        //     ->where('kk_id', 1)
        //     ->where('status_dasar', "hidup")
        //     ->get();
        // $d['data_rt2'] = DataDiri::where('rt', 2)
        //     ->where('kk_id', 1)
        //     ->where('status_dasar', "hidup")
        //     ->get();
        // $d['data_rt3'] = DataDiri::where('rt', 3)->where('kk_id', 1)
        //     ->where('status_dasar', "hidup")
        //     ->get();
        // $d['data_rt4'] = DataDiri::where('rt', 4)->where('kk_id', 1)
        //     ->where('status_dasar', "hidup")
        //     ->get();

        // return view('app.laporan.laporanDomisiliKks', $d);

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
            $chart_tidaktetap     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and jenis_kelamin='Perempuan' and kk_id='1' and status_dasar='hidup'"))->first();
            $jumlah_tidaktetap[] = $chart_tidaktetap->jumlah;
        }

        // return view('app.laporan.laporanJenisKelamins', $d);
        return view('app.laporan.laporanDomisiliKks', compact(
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
