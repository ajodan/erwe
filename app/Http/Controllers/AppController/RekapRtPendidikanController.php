<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Str;

use\App\Model\Datadiri;

use Illuminate\Support\Facades\Auth;


class RekapRtPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rt = Auth::user()->rt;
        $data_belumsekolah = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='1' and status_dasar='hidup'"))->first();
        $data_belumtamatsd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='2' and status_dasar='hidup'"))->first();
        $data_sd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='3' and status_dasar='hidup'"))->first();
        $data_smp = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='4' and status_dasar='hidup'"))->first();
        $data_sma = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='5' and status_dasar='hidup'"))->first();
        $data_d1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='6' and status_dasar='hidup'"))->first();
        $data_d3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='7' and status_dasar='hidup'"))->first();
        $data_s1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='8' and status_dasar='hidup'"))->first();
        $data_s2 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='9' and status_dasar='hidup'"))->first();
        $data_s3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and pendidikan_id='10' and status_dasar='hidup'"))->first();


        $label = ["Tidak/Belum Sekolah", "Belum Tamat SD/Sederajat", "Sudah Tamat SD/Sederajat", "SLTP/Sederajat", "SLTA/Sederajat", "Diploma I/II", "Akademi/Diploma III/Sarjana Muda", "Diploma IV/Strata I", "Strata II", "Strata III"];

        for ($pendidikan = 1; $pendidikan < 11; $pendidikan++) {
            $chart_pendidikan     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where pendidikan_id='$pendidikan' and rt='$rt' and status_dasar='hidup'"))->first();
            $jumlah_pendidikan[] = $chart_pendidikan->jumlah;
        }

        return view('app.rekaprt.rekapPendidikans', compact(
            'data_belumsekolah',
            'data_belumtamatsd',
            'data_sd',
            'data_smp',
            'data_sma',
            'data_d1',
            'data_d3',
            'data_s1',
            'data_s2',
            'data_s3',
            'jumlah_pendidikan',
            'label'
        ));
    }
}
