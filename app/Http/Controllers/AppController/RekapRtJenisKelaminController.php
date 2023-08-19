<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Str;

use\App\Model\Datadiri;

use Illuminate\Support\Facades\Auth;


class RekapRtJenisKelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rt = Auth::user()->rt;

        $data_laki = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and jenis_kelamin='Laki-Laki' and status_dasar='hidup'"))->first();
        $data_perempuan = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='$rt' and jenis_kelamin='Perempuan' and status_dasar='hidup'"))->first();

        $label = ["Laki-Laki", "Perempuan"];

        for ($jeniskel = 1; $jeniskel < 3; $jeniskel++) {
            $chart_jeniskel     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where jenis_kelamin='$jeniskel' and rt='$rt' and status_dasar='hidup'"))->first();
            $jumlah_jeniskel[] = $chart_jeniskel->jumlah;
        }

        return view('app.rekaprt.rekapJenisKelamins', compact(
            'data_laki',
            'data_perempuan',
            'jumlah_jeniskel',
            'label'
        ));
    }
}
