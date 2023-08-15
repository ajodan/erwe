<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DataDiri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DataKkController extends Controller
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
        $data_rt1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt2 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and kk_id='1' and status_dasar='hidup'"))->first();
        $data_rt4 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and kk_id='1' and status_dasar='hidup'"))->first();


        $label = ["RT 01", "RT 02", "RT 03", "RT 04"];

        for ($rt = 1; $rt < 5; $rt++) {
            $chartkk     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and kk_id='1' and status_dasar='hidup'"))->first();
            $jumlah_kk[] = $chartkk->jumlah;
        }

        // $persen_rt1 = round($data_rt1 / $chartkk->jumlah * 100);
        // $persen_rt2 = round($data_rt2 / $chartkk->jumlah * 100);
        // $persen_rt3 = round($data_rt3 / $chartkk->jumlah * 100);
        // $persen_rt4 = round($data_rt4 / $chartkk->jumlah * 100);

        return view('datakk', compact('data_rt1', 'data_rt2', 'data_rt3', 'data_rt4', 'jumlah_kk', 'chartkk', 'label'));
    }
}
