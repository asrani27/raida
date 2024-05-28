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


        if ($req->jenis == '1') {
            $data = Jadwal::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get()->map(function ($item) use ($bulan) {
                if ($bulan == 1) {
                    $item->bulan = 'Januari';
                }
                if ($bulan == 2) {
                    $item->bulan = 'Februari';
                }
                if ($bulan == 3) {
                    $item->bulan = 'Maret';
                }
                if ($bulan == 4) {
                    $bitem->ulan = 'April';
                }
                if ($bulan == 5) {
                    $item->bulan = 'Mei';
                }
                if ($bulan == 6) {
                    $item->bulan = 'Juni';
                }
                if ($bulan == 7) {
                    $item->bulan = 'Juli';
                }
                if ($bulan == 8) {
                    $item->bulan = 'Agustus';
                }
                if ($bulan == 9) {
                    $item->bulan = 'September';
                }
                if ($bulan == 10) {
                    $item->bulan = 'Oktober';
                }
                if ($bulan == 11) {
                    $item->bulan = 'November';
                }
                if ($bulan == 12) {
                    $item->bulan = 'Desember';
                }
                return $item;
            });

            return view('print.jadwal', compact('data'));
        }
        if ($req->jenis == '2') {
            $data = Monitoring::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get()->map(function ($item) use ($bulan) {
                if ($bulan == 1) {
                    $item->bulan = 'Januari';
                }
                if ($bulan == 2) {
                    $item->bulan = 'Februari';
                }
                if ($bulan == 3) {
                    $item->bulan = 'Maret';
                }
                if ($bulan == 4) {
                    $bitem->ulan = 'April';
                }
                if ($bulan == 5) {
                    $item->bulan = 'Mei';
                }
                if ($bulan == 6) {
                    $item->bulan = 'Juni';
                }
                if ($bulan == 7) {
                    $item->bulan = 'Juli';
                }
                if ($bulan == 8) {
                    $item->bulan = 'Agustus';
                }
                if ($bulan == 9) {
                    $item->bulan = 'September';
                }
                if ($bulan == 10) {
                    $item->bulan = 'Oktober';
                }
                if ($bulan == 11) {
                    $item->bulan = 'November';
                }
                if ($bulan == 12) {
                    $item->bulan = 'Desember';
                }
                return $item;
            });


            return view('print.monitoring', compact('data'));
        }
    }
}
