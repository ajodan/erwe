<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;
use Str;

use\App\Model\Agama;

class AgamaController extends Controller
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
            $d['agamas'] = Agama::query()->where('nama_agama', 'LIKE', "%{$q}%")->paginate(10);
        } else {
            $d['agamas'] = Agama::orderBy("id", "DESC")->get();
        }

        return view('app.master.agamas.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.master.agamas.create');
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
            'nama_agama'     => 'required',
        ]);
        $d = new Agama;
        $d->nama_agama = $request->input('nama_agama');
        $d->save();

        return redirect()->route("agamas.index")->with("alertStore", "....");
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
        $d['agamas'] = Agama::find($id);

        return view('app.master.agamas.edit', $d);
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
        $d = Agama::find($id);
        $d->nama_agama = $request->input('nama_agama');
        $d->save();

        return redirect()->route("agamas.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Agama::find($id);
        $d->delete();

        return redirect()->route("agamas.index")->with("alertDestroy", "....");
    }
}
