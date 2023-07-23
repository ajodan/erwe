<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use App\Model\KategoriGaleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Str;
use File;

use\App\Model\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;

        if (!empty($q)) {
            $d['galeris'] = Galeri::query()->where('judul', 'LIKE', "%{$q}%")->paginate(10);
        } else {
            $d['galeris'] = Galeri::leftJoin('kategori_galeris', 'galeris.kategori_galeri_id', '=', 'kategori_galeris.id')
                ->select('galeris.*', 'kategori_galeris.nama_kategori')->get();
        }

        return view('app.website.galeris.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['kategoris'] = KategoriGaleri::all();
        return view('app.website.galeris.create', $d);
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
            'kategori_galeri_id'     => 'required',
            'judul'     => 'required',
            'gambar' => 'required',
            'gambar.*' => 'mimes:PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        $d = new Galeri;
        $d->kategori_galeri_id = $request->input('kategori_galeri_id');
        $d->judul = $request->input('judul');
        $d->is_publish = $request->input('is_publish');
        $gambar = $request->file('gambar');

        if (!empty($gambar)) {
            $filenameWithExt = $request->file('gambar')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $d->gambar = $filenameSimpan;
            $gambar->move(public_path('UploadedFile/gambarGaleri'), $filenameSimpan);
        }
        $d->created_by =  Auth::user()->name;
        // $d->created_at =  date("Y/m/d H:i:s");
        $d->save();

        return redirect()->route("galeris.index")->with("alertStore", "....");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d['kategoris'] = KategoriGaleri::all();
        $d['galeris'] = Galeri::find($id);

        return view('app.website.galeris.edit', $d);
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
        $d = Galeri::find($id);
        $d->kategori_galeri_id = $request->input('kategori_galeri_id');
        $d->judul = $request->input('judul');
        $d->is_publish = $request->input('is_publish');

        $gambar = $request->file('gambar');

        if (!empty($gambar)) {

            $filenameWithExt = $request->file('gambar')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $d->gambar = $filenameSimpan;
            $gambar->move(public_path('UploadedFile/gambarGaleri'), $filenameSimpan);
        }
        $d->created_by =  Auth::user()->name;
        // $d->created_at =  date("Y/m/d H:i:s");
        $d->save();

        return redirect()->route("galeris.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Galeri::find($id);
        $d->delete();

        return redirect()->route("galeris.index")->with("alertDestroy", "....");
    }
}
