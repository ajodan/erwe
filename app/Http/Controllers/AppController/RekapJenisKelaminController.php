<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Hash;
use Str;

use\App\Model\Datadiri;


class RekapJenisKelaminController extends Controller
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
        //     ->get();
        // $d['data_rt2'] = DataDiri::where('rt', 2)
        //     ->where('status_dasar', "hidup")
        //     ->get();
        // $d['data_rt3'] = DataDiri::where('rt', 3)
        //     ->where('status_dasar', "hidup")
        //     ->get();
        // $d['data_rt4'] = DataDiri::where('rt', 4)
        //     ->where('status_dasar', "hidup")
        //     ->get();

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
        return view('app.laporan.laporanJenisKelamins', compact(
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
