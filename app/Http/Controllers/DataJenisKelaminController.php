<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DataDiri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DataJenisKelaminController extends Controller
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
        $data_rt1_laki = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and jenis_kelamin='Laki-Laki' and status_dasar='hidup'"))->first();
        $data_rt2_laki = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and jenis_kelamin='Laki-Laki' and status_dasar='hidup'"))->first();
        $data_rt3_laki = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and jenis_kelamin='Laki-Laki' and status_dasar='hidup'"))->first();
        $data_rt4_laki = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and jenis_kelamin='Laki-Laki' and status_dasar='hidup'"))->first();

        $data_rt1_perempuan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and jenis_kelamin='Perempuan' and status_dasar='hidup'"))->first();
        $data_rt2_perempuan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and jenis_kelamin='Perempuan' and status_dasar='hidup'"))->first();
        $data_rt3_perempuan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and jenis_kelamin='Perempuan' and status_dasar='hidup'"))->first();
        $data_rt4_perempuan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and jenis_kelamin='Perempuan' and status_dasar='hidup'"))->first();

        $label = ["RT 01", "RT 02", "RT 03", "RT 04"];

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_laki     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and jenis_kelamin='Laki-Laki' and status_dasar='hidup'"))->first();
            $jumlah_laki[] = $chart_laki->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_perempuan     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and jenis_kelamin='Perempuan' and status_dasar='hidup'"))->first();
            $jumlah_perempuan[] = $chart_perempuan->jumlah;
        }

        // return view('app.laporan.laporanJenisKelamins', $d);
        return view('datajeniskelamin', compact(
            'data_rt1_laki',
            'data_rt2_laki',
            'data_rt3_laki',
            'data_rt4_laki',
            'data_rt1_perempuan',
            'data_rt2_perempuan',
            'data_rt3_perempuan',
            'data_rt4_perempuan',
            'jumlah_laki',
            'jumlah_perempuan',
            'label'
        ));
    }
}
