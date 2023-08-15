<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Hash;
use Str;

use\App\Model\Datadiri;


class RekapPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $d['data_rt1'] = DataDiri::where('rt', 1)
            ->where('status_dasar', "hidup")
            ->get();
        $d['data_rt2'] = DataDiri::where('rt', 2)
            ->where('status_dasar', "hidup")
            ->get();
        $d['data_rt3'] = DataDiri::where('rt', 3)
            ->where('status_dasar', "hidup")
            ->get();
        $d['data_rt4'] = DataDiri::where('rt', 4)
            ->where('status_dasar', "hidup")
            ->get();

        $data_rt1_ts = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='1' and status_dasar='hidup'"))->first();
        $data_rt2_ts = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='1' and status_dasar='hidup'"))->first();
        $data_rt3_ts = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='1' and status_dasar='hidup'"))->first();
        $data_rt4_ts = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='1' and status_dasar='hidup'"))->first();

        $data_rt1_blmtsd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='2' and status_dasar='hidup'"))->first();
        $data_rt2_blmtsd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='2' and status_dasar='hidup'"))->first();
        $data_rt3_blmtsd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='2' and status_dasar='hidup'"))->first();
        $data_rt4_blmtsd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='2' and status_dasar='hidup'"))->first();

        $data_rt1_tsd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='3' and status_dasar='hidup'"))->first();
        $data_rt2_tsd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='3' and status_dasar='hidup'"))->first();
        $data_rt3_tsd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='3' and status_dasar='hidup'"))->first();
        $data_rt4_tsd = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='3' and status_dasar='hidup'"))->first();

        $data_rt1_smp = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='4' and status_dasar='hidup'"))->first();
        $data_rt2_smp = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='4' and status_dasar='hidup'"))->first();
        $data_rt3_smp = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='4' and status_dasar='hidup'"))->first();
        $data_rt4_smp = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='4' and status_dasar='hidup'"))->first();

        $data_rt1_sma = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='5' and status_dasar='hidup'"))->first();
        $data_rt2_sma = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='5' and status_dasar='hidup'"))->first();
        $data_rt3_sma = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='5' and status_dasar='hidup'"))->first();
        $data_rt4_sma = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='5' and status_dasar='hidup'"))->first();

        $data_rt1_d1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='6' and status_dasar='hidup'"))->first();
        $data_rt2_d1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='6' and status_dasar='hidup'"))->first();
        $data_rt3_d1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='6' and status_dasar='hidup'"))->first();
        $data_rt4_d1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='6' and status_dasar='hidup'"))->first();

        $data_rt1_d3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='7' and status_dasar='hidup'"))->first();
        $data_rt2_d3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='7' and status_dasar='hidup'"))->first();
        $data_rt3_d3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='7' and status_dasar='hidup'"))->first();
        $data_rt4_d3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='7' and status_dasar='hidup'"))->first();

        $data_rt1_s1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='8' and status_dasar='hidup'"))->first();
        $data_rt2_s1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='8' and status_dasar='hidup'"))->first();
        $data_rt3_s1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='8' and status_dasar='hidup'"))->first();
        $data_rt4_s1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='8' and status_dasar='hidup'"))->first();

        $data_rt1_s2 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='9' and status_dasar='hidup'"))->first();
        $data_rt2_s2 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='9' and status_dasar='hidup'"))->first();
        $data_rt3_s2 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='9' and status_dasar='hidup'"))->first();
        $data_rt4_s2 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='9' and status_dasar='hidup'"))->first();

        $data_rt1_s3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and pendidikan_id='10' and status_dasar='hidup'"))->first();
        $data_rt2_s3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and pendidikan_id='10' and status_dasar='hidup'"))->first();
        $data_rt3_s3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and pendidikan_id='10' and status_dasar='hidup'"))->first();
        $data_rt4_s3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and pendidikan_id='10' and status_dasar='hidup'"))->first();

        $label = ["RT 01", "RT 02", "RT 03", "RT 04"];

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_ts     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='1' and status_dasar='hidup'"))->first();
            $jumlah_ts[] = $chart_ts->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_blmtsd     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='2' and status_dasar='hidup'"))->first();
            $jumlah_blmtsd[] = $chart_blmtsd->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_sd     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='3' and status_dasar='hidup'"))->first();
            $jumlah_sd[] = $chart_sd->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_smp     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='4' and status_dasar='hidup'"))->first();
            $jumlah_smp[] = $chart_smp->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_sma     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='5' and status_dasar='hidup'"))->first();
            $jumlah_sma[] = $chart_sma->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_d1     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='6' and status_dasar='hidup'"))->first();
            $jumlah_d1[] = $chart_d1->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_d3     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='7' and status_dasar='hidup'"))->first();
            $jumlah_d3[] = $chart_d3->jumlah;
        }

        for ($rt = 1; $rt < 5; $rt++) {
            $chart_s1     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='8' and status_dasar='hidup'"))->first();
            $jumlah_s1[] = $chart_s1->jumlah;
        }
        for ($rt = 1; $rt < 5; $rt++) {
            $chart_s2     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='9' and status_dasar='hidup'"))->first();
            $jumlah_s2[] = $chart_s2->jumlah;
        }
        for ($rt = 1; $rt < 5; $rt++) {
            $chart_s3     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt' and pendidikan_id='10' and status_dasar='hidup'"))->first();
            $jumlah_s3[] = $chart_s3->jumlah;
        }



        // return view('app.laporan.laporanPendidikans', $d);

        return view('app.laporan.laporanPendidikans', compact(
            'data_rt1_ts',
            'data_rt2_ts',
            'data_rt3_ts',
            'data_rt4_ts',
            'data_rt1_blmtsd',
            'data_rt2_blmtsd',
            'data_rt3_blmtsd',
            'data_rt4_blmtsd',
            'data_rt1_tsd',
            'data_rt2_tsd',
            'data_rt3_tsd',
            'data_rt4_tsd',
            'data_rt1_smp',
            'data_rt2_smp',
            'data_rt3_smp',
            'data_rt4_smp',
            'data_rt1_sma',
            'data_rt2_sma',
            'data_rt3_sma',
            'data_rt4_sma',
            'data_rt1_d1',
            'data_rt2_d1',
            'data_rt3_d1',
            'data_rt4_d1',
            'data_rt1_d3',
            'data_rt2_d3',
            'data_rt3_d3',
            'data_rt4_d3',
            'data_rt1_s1',
            'data_rt2_s1',
            'data_rt3_s1',
            'data_rt4_s1',
            'data_rt1_s2',
            'data_rt2_s2',
            'data_rt3_s2',
            'data_rt4_s2',
            'data_rt1_s3',
            'data_rt2_s3',
            'data_rt3_s3',
            'data_rt4_s3',
            'jumlah_ts',
            'jumlah_blmtsd',
            'jumlah_sd',
            'jumlah_smp',
            'jumlah_sma',
            'jumlah_d1',
            'jumlah_d3',
            'jumlah_s1',
            'jumlah_s2',
            'jumlah_s3',
            'label'
        ));
    }
}
