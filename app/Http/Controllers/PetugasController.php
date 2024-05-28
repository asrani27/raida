<?php

namespace App\Http\Controllers;

use App\Tim;
use App\Petugas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PetugasController extends Controller
{
    public function index()
    {
        $data = Petugas::all();
        return view('backend.petugas.index', compact('data'));
    }

    public function add()
    {
        $tim = Tim::get();
        return view('backend.petugas.add', compact('tim'));
    }

    public function save(Request $req)
    {
        Petugas::create($req->all());
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/petugas');
    }

    public function edit($id)
    {
        $tim = Tim::get();
        $data = Petugas::find($id);
        return view('backend.petugas.edit', compact('data', 'tim'));
    }

    public function update(Request $req, $id)
    {
        $s = Petugas::find($id)->update($req->all());
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/petugas');
    }

    public function delete($id)
    {
        $delete = Petugas::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
