<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;

use App\Model\DataDiri;
use App\Model\StatusKeluarga;
use App\Model\StatusKartuKeluarga;
use App\Model\StatusPernikahan;
use App\Model\Agama;
use App\Model\Pendidikan;
use App\Model\Pekerjaan;
use App\Model\Cacat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataKeluargaExport;

class DataKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->level == 'Rw') {
            $d['data_diris'] = DataDiri::join('pendidikans', 'pendidikans.id', '=', 'data_diris.pendidikan_id')
                ->join('status_kartu_keluargas', 'status_kartu_keluargas.id', '=', 'data_diris.kk_id')
                ->where('data_diris.kk_id', 1)
                ->select('data_diris.*', 'pendidikans.jenjang', 'status_kartu_keluargas.hub_kk')
                ->orderBy('data_diris.no_rumah', 'ASC')->get();
        } else {
            $rt = Auth::user()->rt;
            $d['data_diris'] = DataDiri::join('pendidikans', 'pendidikans.id', '=', 'data_diris.pendidikan_id')
                ->join('status_kartu_keluargas', 'status_kartu_keluargas.id', '=', 'data_diris.kk_id')
                ->where('data_diris.rt', $rt)
                ->where('data_diris.kk_id', 1)
                ->select('data_diris.*', 'pendidikans.jenjang', 'status_kartu_keluargas.hub_kk')
                ->orderBy('data_diris.no_rumah', 'ASC')->get();
        }
        return view('app.v_dataKeluarga.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['data_diris'] = DataDiri::all();
        $d['status_keluargas'] = StatusKeluarga::all();
        $d['status_kartu_keluargas'] = StatusKartuKeluarga::all();
        $d['status_pernikahans'] = StatusPernikahan::all();
        $d['agamas'] = Agama::all();
        $d['pendidikans'] = Pendidikan::all();
        $d['pekerjaans'] = Pekerjaan::all();
        $d['cacats'] = Cacat::all();

        return view('app.v_dataDiri.create', $d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'    => ['required', 'string', 'min:16', 'max:20', 'unique:data_diris'],
            'no_kk'    => ['required', 'string', 'min:16', 'max:20'],
            'nama_lengkap'  => ['required', 'string'],
            'jenis_kelamin'  => ['required'],
        ]);


        $d = new DataDiri;
        $d->no_rumah = $request->input('no_rumah');
        $d->kk_id = $request->input('kk_id');
        $d->pernikahan_id = $request->input('pernikahan_id');

        $d->nama_lengkap = $request->input('nama_lengkap');
        $d->tempat_lahir = $request->input('tempat_lahir');
        $d->tanggal_lahir = $request->input('tanggal_lahir');
        $d->alamat_kk = $request->input('alamat_kartuKeluarga');
        $d->alamat_domisili = $request->input('alamat_domisili');
        $d->jenis_kelamin = $request->input('jenis_kelamin');
        $d->agama_id = $request->input('agama_id');
        $d->pendidikan_id = $request->input('pendidikan_id');
        $d->no_kk = $request->input('no_kk');
        $d->nik = $request->input('nik');
        $d->gol_darah = $request->input('gol_darah');
        $d->cacat_id = $request->input('cacat_id');
        $d->pekerjaan_id = $request->input('pekerjaan_id');
        $d->rt = $request->input('rt');
        $d->status_ktp = $request->input('status_ktp');
        $d->no_hp = $request->input('no_hp');
        $d->kewarganegaraan = $request->input('kewarganegaraan');
        $d->keterangan = $request->input('keterangan');
        $d->tgl_keluar_kk = $request->input('tgl_keluar_kk');
        $d->status_dasar = $request->input('status_dasar');
        $d->created_by = Auth::user()->email;

        $foto = $request->file('foto');
        if (!empty($foto)) {
            $d->foto = $foto->getClientOriginalName();
            $foto->move(public_path('UploadedFile/profilPelamar'), $foto->getClientOriginalName());
        }
        // print_r('<pre>');
        // print_r($d);
        // die();
        $d->save();

        return redirect()->route("data_diris.index")->with("alertStore", "....");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d['data_diris'] = DataDiri::find($id);
        $d['status_keluargas'] = StatusKeluarga::all();
        $d['status_kartu_keluargas'] = StatusKartuKeluarga::all();
        $d['status_pernikahans'] = StatusPernikahan::all();
        $d['agamas'] = Agama::all();
        $d['pekerjaans'] = Pekerjaan::all();
        $d['cacats'] = Cacat::all();
        $d['pendidikans'] = Pendidikan::all();

        return view('app.v_dataKeluarga.detail', $d);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d['data_diris'] = DataDiri::find($id);
        // print_r('<pre>');
        // print_r($d['data_diris']);
        // die();
        return view('app.v_dataKeluarga.edit', $d);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            //'nik'    => ['required', 'string', 'min:16', 'max:20', 'unique:data_diris'],
            //'no_kk'    => ['required', 'string', 'min:16', 'max:20'],
            'nama_lengkap'  => ['required', 'string'],
            'jenis_kelamin'  => ['required'],
            'agama_id'  => ['required'],
            'pendidikan_id'  => ['required'],
            'pekerjaan_id'  => ['required'],
            'pernikahan_id'  => ['required'],
        ]);

        $d = DataDiri::find($id);

        $d->kk_id = $request->input('kk_id');
        $d->pernikahan_id = $request->input('pernikahan_id');

        $d->nama_lengkap = $request->input('nama_lengkap');
        $d->tempat_lahir = $request->input('tempat_lahir');
        $d->tanggal_lahir = $request->input('tanggal_lahir');
        $d->alamat_kk = $request->input('alamat_kartuKeluarga');
        $d->alamat_domisili = $request->input('alamat_domisili');
        $d->jenis_kelamin = $request->input('jenis_kelamin');
        $d->agama_id = $request->input('agama_id');
        $d->pendidikan_id = $request->input('pendidikan_id');
        $d->cacat_id = $request->input('cacat_id');
        $d->pekerjaan_id = $request->input('pekerjaan_id');
        $d->gol_darah = $request->input('gol_darah');
        $d->status_ktp = $request->input('status_ktp');
        $d->no_hp = $request->input('no_hp');
        $d->rt = $request->input('rt');
        $d->no_rumah = $request->input('no_rumah');
        $d->no_kk = $request->input('no_kk');
        $d->kewarganegaraan = $request->input('kewarganegaraan');
        $d->tgl_keluar_kk = $request->input('tgl_keluar_kk');
        $d->keterangan = $request->input('keterangan');
        $d->status_dasar = $request->input('status_dasar');

        $foto = $request->file('foto');
        if (!empty($foto)) {
            $d->foto = $foto->getClientOriginalName();
            $foto->move(public_path('UploadedFile/profilPelamar'), $foto->getClientOriginalName());
        }

        $d->save();

        return redirect()->route("data_diris.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = DataDiri::find($id);
        $d->delete();

        return redirect()->route("data_diris.index")->with("alertDestroy", "....");
    }

    public function print()
    {
        if (Auth::user()->level == 'Rw') {
            $d['data_diris'] = DataDiri::leftJoin('agamas', 'agamas.id', '=', 'data_diris.agama_id')
                ->leftJoin('pendidikans', 'pendidikans.id', '=', 'data_diris.pendidikan_id')
                ->leftJoin('pekerjaans', 'pekerjaans.id', '=', 'data_diris.pekerjaan_id')
                ->orderBy("id", "DESC")
                ->select('agamas.nama_agama', 'pendidikans.jenjang', 'pekerjaans.nama_pekerjaan', 'data_diris.*')
                ->get();
            $d['status_kartu_keluargas'] = StatusKartuKeluarga::all();
        } else {
            $rt = Auth::user()->rt;
            $d['rt'] = Auth::user()->rt;
            $d['data_diris'] = DataDiri::leftJoin('agamas', 'agamas.id', '=', 'data_diris.agama_id')
                ->leftJoin('pendidikans', 'pendidikans.id', '=', 'data_diris.pendidikan_id')
                ->leftJoin('pekerjaans', 'pekerjaans.id', '=', 'data_diris.pekerjaan_id')
                ->where('rt', $rt)->orderBy("id", "DESC")
                ->select('agamas.nama_agama', 'pendidikans.jenjang', 'pekerjaans.nama_pekerjaan', 'data_diris.*')
                ->get();
            $d['status_kartu_keluargas'] = StatusKartuKeluarga::all();
        }
        return view('app.laporan.laporanDataDiri', $d);
    }


    public function nomorKK(Request $request)
    {
        if (Auth::user()->level == 'Rw') {
            //$rt = Auth::user()->rt;
            $d['pekerjaans'] = Pekerjaan::all();
            $q = $request->Cari;
            if ($q) {
                $d['data_diris'] = DataDiri::where('nama_lengkap', 'LIKE', '%' . $q . '%')->orWhere('no_kk', 'LIKE', '%' . $q . '%')->where('kk_id', 1)->paginate(1);
            } else {
                $d['data_diris'] = DataDiri::where('kk_id', 1)->paginate(3);
            }
        } else {
            $rt = Auth::user()->rt;
            $d['pekerjaans'] = Pekerjaan::all();
            $q = $request->Cari;
            if ($q) {
                $d['data_diris'] = DataDiri::where('rt', $rt)->where('nama_lengkap', 'LIKE', '%' . $q . '%')->orWhere('no_kk', 'LIKE', '%' . $q . '%')->where('kk_id', 1)->paginate(1);
            } else {
                $d['data_diris'] = DataDiri::where('rt', $rt)->where('kk_id', 1)->paginate(3);
            }
        }
        return view('app.laporan.dataKK', $d);
    }

    public function detailDataKK($id)
    {

        if (Auth::user()->level == 'Rw') {
            //$rt = Auth::user()->rt;
            // $d['rt'] = Auth::user()->rt;
            $d['data_diris'] = DataDiri::leftJoin('agamas', 'agamas.id', '=', 'data_diris.agama_id')
                ->leftJoin('pendidikans', 'pendidikans.id', '=', 'data_diris.pendidikan_id')
                ->leftJoin('pekerjaans', 'pekerjaans.id', '=', 'data_diris.pekerjaan_id')
                ->leftJoin('status_kartu_keluargas', 'status_kartu_keluargas.id', '=', 'data_diris.kk_id')
                ->where('no_kk', $id)
                ->orderBy('kk_id', 'ASC')
                ->select('status_kartu_keluargas.hub_kk', 'agamas.nama_agama', 'pendidikans.jenjang', 'pekerjaans.nama_pekerjaan', 'data_diris.*')
                ->get();

            $d['data_kk'] = DataDiri::where('kk_id', 1)->first();
            $d['status_pernikahans'] = StatusPernikahan::all();
            $d['agamas'] = Agama::all();
        } else {
            $rt = Auth::user()->rt;
            $d['rt'] = Auth::user()->rt;
            $d['data_diris'] = DataDiri::leftJoin('agamas', 'agamas.id', '=', 'data_diris.agama_id')
                ->leftJoin('pendidikans', 'pendidikans.id', '=', 'data_diris.pendidikan_id')
                ->leftJoin('pekerjaans', 'pekerjaans.id', '=', 'data_diris.pekerjaan_id')
                ->leftJoin('status_kartu_keluargas', 'status_kartu_keluargas.id', '=', 'data_diris.kk_id')
                ->where('rt', $rt)->where('no_kk', $id)
                ->orderBy('kk_id', 'ASC')
                ->select('status_kartu_keluargas.hub_kk', 'agamas.nama_agama', 'pendidikans.jenjang', 'pekerjaans.nama_pekerjaan', 'data_diris.*')
                ->get();

            $d['data_kk'] = DataDiri::where('rt', $rt)->where('kk_id', 1)->first();
            $d['status_pernikahans'] = StatusPernikahan::all();
            $d['agamas'] = Agama::all();
        }

        return view('app.v_detailKeluarga.index', $d);
    }


    public function getDataEdit($id)
    {
        $d = DataDiri::find($id);
        return response()->json($d);

        // echo json_encode($d); native
    }

    public function export()
    {
        return Excel::download(new DatakeluargaExport(), 'datakeluarga.xlsx');
    }
}
