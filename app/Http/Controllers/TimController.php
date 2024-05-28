<?php

namespace App\Http\Controllers;

use App\Tim;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TimController extends Controller
{
    public function index()
    {
        $data = Tim::all();
        return view('backend.tim.index', compact('data'));
    }

    public function add()
    {
        return view('backend.tim.add');
    }

    public function save(Request $req)
    {
        Tim::create($req->all());
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/tim');
    }

    public function edit($id)
    {
        $data = Tim::find($id);
        return view('backend.tim.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Tim::find($id)->update($req->all());
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/tim');
    }

    public function delete($id)
    {
        $delete = Tim::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
