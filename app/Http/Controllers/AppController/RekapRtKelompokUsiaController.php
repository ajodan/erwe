<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Hash;
use Str;
use Cache;
use Session;

use App\Model\DataDiri;

use Illuminate\Support\Facades\Auth;

class RekapRtKelompokUsiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rt = Auth::user()->rt;
        $d['data_rt'] = DataDiri::where('rt', $rt)
            ->where('status_dasar', "hidup")
            ->get();

        return view('app.rekaprt.rekapKelompokUsias', $d);
    }
}
