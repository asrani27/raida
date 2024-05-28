<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Monitoring;
use App\Pedagang;
use App\Peralihan;
use App\Petugas;
use App\Retribusi;
use App\Tim;
use App\Wilayah;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }
    public function wilayah()
    {
        $data = Wilayah::get();
        return view('print.wilayah', compact('data'));
    }
    public function petugas()
    {
        $data = Petugas::get();
        return view('print.petugas', compact('data'));
    }
    public function tim()
    {
        $data = Tim::get();
        return view('print.tim', compact('data'));
    }



    public function periode(Request $req)
    {
        $bulan = $req->bulan;
        $tahun = $req->tahun;

        if ($bulan == 1) {
            $namabulan = 'Januari';
        }
        if ($bulan == 2) {
            $namabulan = 'Februari';
        }
        if ($bulan == 3) {
            $namabulan = 'Maret';
        }
        if ($bulan == 4) {
            $bnamaulan = 'April';
        }
        if ($bulan == 5) {
            $namabulan = 'Mei';
        }
        if ($bulan == 6) {
            $namabulan = 'Juni';
        }
        if ($bulan == 7) {
            $namabulan = 'Juli';
        }
        if ($bulan == 8) {
            $namabulan = 'Agustus';
        }
        if ($bulan == 9) {
            $namabulan = 'September';
        }
        if ($bulan == 10) {
            $namabulan = 'Oktober';
        }
        if ($bulan == 11) {
            $namabulan = 'November';
        }
        if ($bulan == 12) {
            $namabulan = 'Desember';
        }

        if ($req->jenis == '1') {
            $data = Jadwal::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();

            return view('print.jadwal', compact('data', 'namabulan'));
        }
        if ($req->jenis == '2') {
            $data = Monitoring::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();


            return view('print.monitoring', compact('data', 'namabulan'));
        }
    }
}
