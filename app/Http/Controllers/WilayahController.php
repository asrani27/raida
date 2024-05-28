<?php

namespace App\Http\Controllers;

use App\Wilayah;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WilayahController extends Controller
{
    public function index()
    {
        $data = Wilayah::all();
        return view('backend.wilayah.index', compact('data'));
    }

    public function add()
    {
        return view('backend.wilayah.add');
    }

    public function save(Request $req)
    {
        Wilayah::create($req->all());
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/wilayah');
    }

    public function edit($id)
    {
        $data = Wilayah::find($id);
        return view('backend.wilayah.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Wilayah::find($id)->update($req->all());
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/wilayah');
    }

    public function delete($id)
    {
        $delete = Wilayah::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
