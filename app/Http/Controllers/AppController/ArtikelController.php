<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use App\Model\KategoriArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Str;
use File;

use\App\Model\Artikel;

class ArtikelController extends Controller
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
            $d['artikels'] = Artikel::query()->where('judul', 'LIKE', "%{$q}%")->paginate(10);
        } else {
            $d['artikels'] = Artikel::leftJoin('kategori_artikels', 'artikels.kategori_id', '=', 'kategori_artikels.id')
                ->select('artikels.*', 'kategori_artikels.nama_kategori')->get();
            // orderBy("id", "DESC")->get();
        }

        return view('app.website.artikels.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['kategoris'] = KategoriArtikel::all();
        return view('app.website.artikels.create', $d);
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
            'kategori_id'     => 'required',
            'judul'     => 'required',
            'deskripsi'     => 'required',
            'gambar' => 'required',
            'gambar.*' => 'mimes:PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        $d = new Artikel;
        $d->kategori_id = $request->input('kategori_id');
        $d->judul = $request->input('judul');
        $d->deskripsi = $request->input('deskripsi');
        $d->is_publish = $request->input('is_publish');
        // $d->gambar = $request->input('gambar');
        $gambar = $request->file('gambar');

        if (!empty($gambar)) {
            $filenameWithExt = $request->file('gambar')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $d->gambar = $filenameSimpan;
            $gambar->move(public_path('UploadedFile/gambarArtikel'), $filenameSimpan);
        }
        $d->created_by =  Auth::user()->name;
        $d->save();

        return redirect()->route("artikels.index")->with("alertStore", "....");
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
        $d['kategoris'] = KategoriArtikel::all();
        $d['artikels'] = Artikel::find($id);

        return view('app.website.artikels.edit', $d);
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
        $d = Artikel::find($id);
        $d->kategori_id = $request->input('kategori_id');
        $d->judul = $request->input('judul');
        $d->deskripsi = $request->input('deskripsi');
        $d->is_publish = $request->input('is_publish');
        // $gambar = $request->file('gambar');
        // if (!empty($gambar)) {
        //     $d->gambar = $gambar->getClientOriginalName();
        //     $file_name = time() . rand(100, 999) . $gambar;
        //     $gambar->move(public_path('UploadedFile/gambarArtikel'), $file_name);
        // }
        $gambar = $request->file('gambar');

        if (!empty($gambar)) {

            $filenameWithExt = $request->file('gambar')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $d->gambar = $filenameSimpan;
            $gambar->move(public_path('UploadedFile/gambarArtikel'), $filenameSimpan);
        }
        $d->created_by =  Auth::user()->name;
        $d->save();

        return redirect()->route("artikels.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Artikel::find($id);
        $d->delete();

        return redirect()->route("artikels.index")->with("alertDestroy", "....");
    }
}
