<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Monitoring;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MonitoringController extends Controller
{
    public function index()
    {
        $data = Monitoring::all();
        return view('backend.monitoring.index', compact('data'));
    }

    public function add()
    {
        $jadwal = Jadwal::get();
        return view('backend.monitoring.add', compact('jadwal'));
    }

    public function save(Request $req)
    {
        Monitoring::create($req->all());
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/monitoring');
    }

    public function edit($id)
    {
        $data = Monitoring::find($id);
        $jadwal = Jadwal::get();
        return view('backend.monitoring.edit', compact('data', 'jadwal'));
    }

    public function update(Request $req, $id)
    {
        $s = Monitoring::find($id)->update($req->all());
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/monitoring');
    }

    public function delete($id)
    {
        $delete = Monitoring::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
