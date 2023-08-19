<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Str;

use\App\Model\Datadiri;

use Illuminate\Support\Facades\Auth;


class RekapRtAgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rt = Auth::user()->rt;
        // $d['data_rt'] = DataDiri::where('rt', $rt)
        //     ->where('status_dasar', "hidup")
        //     ->get();

        $data_islam = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and agama_id='1' and status_dasar='hidup'"))->first();
        $data_kristen = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and agama_id='2' and status_dasar='hidup'"))->first();
        $data_katholik = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and agama_id='3' and status_dasar='hidup'"))->first();
        $data_hindu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and agama_id='4' and status_dasar='hidup'"))->first();
        $data_budha = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and agama_id='5' and status_dasar='hidup'"))->first();
        $data_konghucu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and agama_id='6' and status_dasar='hidup'"))->first();
        $data_kepercayaan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and agama_id='7' and status_dasar='hidup'"))->first();


        $label = ["Islam", "Kristen", "Katholik", "Hindu", "Budha", "Konghucu", "Kepercayaan"];

        for ($agama = 1; $agama < 8; $agama++) {
            $chart_agama     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where agama_id='$agama' and rt='$rt' and status_dasar='hidup'"))->first();
            $jumlah_agama[] = $chart_agama->jumlah;
        }


        // return view('app.rekaprt.rekapAgamas', $d);

        return view('app.rekaprt.rekapAgamas', compact(
            'data_islam',
            'data_kristen',
            'data_katholik',
            'data_hindu',
            'data_budha',
            'data_konghucu',
            'data_kepercayaan',
            'jumlah_agama',
            'label'
        ));
    }
}
