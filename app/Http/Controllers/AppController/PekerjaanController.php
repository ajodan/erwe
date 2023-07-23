<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;

use App\Model\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['pekerjaans'] = Pekerjaan::orderBy('id', 'DESC')->get();

        return view('app.master.pekerjaans.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.master.pekerjaans.create');
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
            'nama_pekerjaan'     => 'required',
        ]);
        $d = new Pekerjaan;
        $d->nama_pekerjaan = $request->input('nama_pekerjaan');

        $d->save();

        return redirect()->route("pekerjaans.index")->with("alertStore", "....");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d['pekerjaans'] = Pekerjaan::find($id);

        return view('app.master.pekerjaans.edit', $d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = Pekerjaan::find($id);
        $d->nama_pekerjaan = $request->input('nama_pekerjaan');

        $d->save();

        return redirect()->route("pekerjaans.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Pekerjaan::find($id);
        $d->delete();

        return redirect()->route("pekerjaans.index")->with("alertDestroy", "....");
    }
}
