<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

use Hash;
use Str;

use App\User;

class UserController extends Controller
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
            $d['users'] = User::query()->where("level", "Warga")->where('name', 'LIKE', "%{$q}%")->orWhere('email', 'LIKE', "%{$q}%")->paginate(10);
        } else {
            $d['users'] = User::where("level", "Warga")->orderBy("id", "DESC")->get();
        }

        return view('app.users.index', $d);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.users.create');
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
            'name'     => 'required',
            'email'    => 'required|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'no_telp'    => ['required', 'string', 'min:11/12', 'unique:users'],
        ]);
        $d = new User;
        $d->name = $request->input('name');
        $d->email = $request->input('email');
        $d->password = Hash::make($request->input('password'));
        $d->password_ = $request->input('password');
        $d->no_telp = $request->input('no_telp');
        $d->level = "User";
        $d->api_token = Str::random(100);

        // $profile_ = $request->file('profile');
        // $d->profile = $profile_->getClientOriginalName();
        // $profile_->move(public_path('UploadedFile/users/profile/'), $profile_->getClientOriginalName());

        $d->save();

        return redirect()->route("users.index")->with("alertStore", "....");
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
        $d['users'] = User::find($id);

        return view('app.users.edit', $d);
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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $d = User::find($id);
        $d->name = $request->input('name');
        $d->email = $request->input('email');
        $d->password = Hash::make($request->input('password'));
        $d->password_ = $request->input('password');
        $d->no_telp = $request->input('no_telp');
        $d->level = "User";

        // $profile_ = $request->file('profile');
        // $d->profile = $profile_->getClientOriginalName();
        // $profile_->move(public_path('UploadedFile/users/profile/'), $profile_->getClientOriginalName());

        $d->save();

        return redirect()->route("users.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = User::find($id);
        $d->delete();

        return redirect()->route("users.index")->with("alertDestroy", "....");
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel/', $nama_file);

        // import data
        $import = Excel::import(new UsersImport(), storage_path('app/public/excel/' . $nama_file));

        //remove from server
        Storage::delete($path);

        if ($import) {
            //redirect
            return redirect()->route('users.index')->with(['success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('users.index')->with(['error' => 'Data Gagal Diimport!']);
        }
    }

    public function export()
    {
        return Excel::download(new UsersExport(), 'users.xlsx');
    }
}
