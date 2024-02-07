<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\DataDiri;
use App\Model\StatusKartuKeluarga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->level == 'Rw') {
            // Home
            $rt = Auth::user()->rt;
            $d['rt'] = Auth::user()->rt;
            $d['pengguna'] = User::All();
            $d['data_diris'] = DataDiri::All();
            $d['kartu_keluargas'] = DataDiri::select('no_kk')->groupBy('no_kk')->get();
            $d['KepalaKeluargaCount'] = DataDiri::where('kk_id', 1)->count();
            // JenjangPendidikan
            $d['pendidikans'] = DataDiri::select('pendidikan_id')->get();
            // JenjangPendidikan
            $d['agamas'] = DataDiri::select('agama_id')->get();
            // wargaJenisKelamin
            $d['jenis_kelamins'] = DataDiri::select('tanggal_lahir', 'jenis_kelamin')->get();
        }  else if (Auth::user()->level == 'KPPS') {
            // Home
            $rt = Auth::user()->rt;
            $d['rt'] = Auth::user()->rt;
            $d['pengguna'] = User::All();
            $d['data_diris'] = DataDiri::All();
            $d['kartu_keluargas'] = DataDiri::select('no_kk')->groupBy('no_kk')->get();
            $d['KepalaKeluargaCount'] = DataDiri::where('kk_id', 1)->count();
            // JenjangPendidikan
            $d['pendidikans'] = DataDiri::select('pendidikan_id')->get();
            // JenjangPendidikan
            $d['agamas'] = DataDiri::select('agama_id')->get();
            // wargaJenisKelamin
            $d['jenis_kelamins'] = DataDiri::select('tanggal_lahir', 'jenis_kelamin')->get();
        } else {
            // Home
            $rt = Auth::user()->rt;
            $d['rt'] = Auth::user()->rt;
            $d['pengguna'] = User::where('rt', $rt)->get();
            $d['data_diris'] = DataDiri::where('rt', $rt)->get();
            $d['kartu_keluargas'] = DataDiri::select('no_kk')->where('rt', $rt)->groupBy('no_kk')->get();
            $d['KepalaKeluargaCount'] = DataDiri::where('kk_id', 1)->where('rt', $rt)->count();
            // JenjangPendidikan
            $d['pendidikans'] = DataDiri::select('pendidikan_id')->where('rt', $rt)->get();
            // JenjangPendidikan
            $d['agamas'] = DataDiri::select('agama_id')->where('rt', $rt)->get();
            // wargaJenisKelamin
            $d['jenis_kelamins'] = DataDiri::select('tanggal_lahir', 'jenis_kelamin')->where('rt', $rt)->get();
        }

        return view('home', $d);
    }
}
