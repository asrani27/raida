<?php

namespace App\Http\Controllers;

use App\Tim;
use App\Jadwal;
use App\Wilayah;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::all();
        return view('backend.jadwal.index', compact('data'));
    }

    public function add()
    {
        $tim = Tim::get();
        $wilayah = Wilayah::get();
        return view('backend.jadwal.add', compact('tim', 'wilayah'));
    }

    public function save(Request $req)
    {
        Jadwal::create($req->all());
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/jadwal');
    }

    public function edit($id)
    {
        $data = Jadwal::find($id);
        $tim = Tim::get();
        $wilayah = Wilayah::get();
        return view('backend.jadwal.edit', compact('data', 'tim', 'wilayah'));
    }

    public function update(Request $req, $id)
    {
        $s = Jadwal::find($id)->update($req->all());
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/jadwal');
    }

    public function delete($id)
    {
        $delete = Jadwal::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
