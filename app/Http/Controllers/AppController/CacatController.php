<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;

use App\Model\Cacat;
use Illuminate\Http\Request;

class CacatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['cacats'] = Cacat::orderBy('id', 'DESC')->get();

        return view('app.master.cacats.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.master.cacats.create');
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
            'jenis_cacat'     => 'required',
        ]);
        $d = new Cacat;
        $d->jenis_cacat = $request->input('jenis_cacat');

        $d->save();

        return redirect()->route("cacats.index")->with("alertStore", "....");
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
        $d['cacats'] = Cacat::find($id);

        return view('app.master.cacats.edit', $d);
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
        $d = Cacat::find($id);
        $d->jenis_cacat = $request->input('jenis_cacat');

        $d->save();

        return redirect()->route("cacats.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Cacat::find($id);
        $d->delete();

        return redirect()->route("cacats.index")->with("alertDestroy", "....");
    }
}
