<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DataDiri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DataAgamaController extends Controller
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
        $data_rt1_islam = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and agama_id='1' and status_dasar='hidup'"))->first();
        $data_rt2_islam = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and agama_id='1' and status_dasar='hidup'"))->first();
        $data_rt3_islam = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and agama_id='1' and status_dasar='hidup'"))->first();
        $data_rt4_islam = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and agama_id='1' and status_dasar='hidup'"))->first();

        $data_rt1_kristen = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and agama_id='2' and status_dasar='hidup'"))->first();
        $data_rt2_kristen = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and agama_id='2' and status_dasar='hidup'"))->first();
        $data_rt3_kristen = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and agama_id='3' and status_dasar='hidup'"))->first();
        $data_rt4_kristen = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and agama_id='2' and status_dasar='hidup'"))->first();

        $data_rt1_katholik = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and agama_id='3' and status_dasar='hidup'"))->first();
        $data_rt2_katholik = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and agama_id='3' and status_dasar='hidup'"))->first();
        $data_rt3_katholik = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and agama_id='3' and status_dasar='hidup'"))->first();
        $data_rt4_katholik = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and agama_id='3' and status_dasar='hidup'"))->first();

        $data_rt1_hindu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and agama_id='4' and status_dasar='hidup'"))->first();
        $data_rt2_hindu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and agama_id='4' and status_dasar='hidup'"))->first();
        $data_rt3_hindu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and agama_id='4' and status_dasar='hidup'"))->first();
        $data_rt4_hindu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and agama_id='4' and status_dasar='hidup'"))->first();

        $data_rt1_budha = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and agama_id='5' and status_dasar='hidup'"))->first();
        $data_rt2_budha = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and agama_id='5' and status_dasar='hidup'"))->first();
        $data_rt3_budha = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and agama_id='5' and status_dasar='hidup'"))->first();
        $data_rt4_budha = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and agama_id='5' and status_dasar='hidup'"))->first();

        $data_rt1_konghucu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and agama_id='6' and status_dasar='hidup'"))->first();
        $data_rt2_konghucu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and agama_id='6' and status_dasar='hidup'"))->first();
        $data_rt3_konghucu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and agama_id='6' and status_dasar='hidup'"))->first();
        $data_rt4_konghucu = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and agama_id='6' and status_dasar='hidup'"))->first();

        $data_rt1_kepercayaan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and agama_id='7' and status_dasar='hidup'"))->first();
        $data_rt2_kepercayaan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and agama_id='7' and status_dasar='hidup'"))->first();
        $data_rt3_kepercayaan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and agama_id='7' and status_dasar='hidup'"))->first();
        $data_rt4_kepercayaan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and agama_id='7' and status_dasar='hidup'"))->first();

        $label = ["RT 01", "RT 02", "RT 03", "RT 04"];

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_islam     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and agama_id='1' and status_dasar='hidup'"))->first();
            $jumlah_islam[] = $chart_islam->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_kristen     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and agama_id='2' and status_dasar='hidup'"))->first();
            $jumlah_kristen[] = $chart_kristen->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_katolik     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and agama_id='3' and status_dasar='hidup'"))->first();
            $jumlah_katholik[] = $chart_katolik->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_hindu     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and agama_id='4' and status_dasar='hidup'"))->first();
            $jumlah_hindu[] = $chart_hindu->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_budha     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and agama_id='5' and status_dasar='hidup'"))->first();
            $jumlah_budha[] = $chart_budha->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_konghucu     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and agama_id='6' and status_dasar='hidup'"))->first();
            $jumlah_konghucu[] = $chart_konghucu->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_kepercayaan     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and agama_id='7' and status_dasar='hidup'"))->first();
            $jumlah_kepercayaan[] = $chart_kepercayaan->jumlah;
        }

        // for ($rt = 1; $rt < 5; $rt++) {
        //     $chart_total  = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and status_dasar='hidup'"))->first();
        //     $jumlah_total[] = $chart_total->jumlah;
        // }


        return view('dataagama', compact(
            'data_rt1_islam',
            'data_rt2_islam',
            'data_rt3_islam',
            'data_rt4_islam',
            'data_rt1_kristen',
            'data_rt2_kristen',
            'data_rt3_kristen',
            'data_rt4_kristen',
            'data_rt1_katholik',
            'data_rt2_katholik',
            'data_rt3_katholik',
            'data_rt4_katholik',
            'data_rt1_hindu',
            'data_rt2_hindu',
            'data_rt3_hindu',
            'data_rt4_hindu',
            'data_rt1_budha',
            'data_rt2_budha',
            'data_rt3_budha',
            'data_rt4_budha',
            'data_rt1_konghucu',
            'data_rt2_konghucu',
            'data_rt3_konghucu',
            'data_rt4_konghucu',
            'data_rt1_kepercayaan',
            'data_rt2_kepercayaan',
            'data_rt3_kepercayaan',
            'data_rt4_kepercayaan',
            'jumlah_islam',
            'jumlah_kristen',
            'jumlah_katholik',
            'jumlah_hindu',
            'jumlah_budha',
            'jumlah_konghucu',
            'jumlah_kepercayaan',
            // 'jumlah_total',
            'label'
        ));
    }
}
