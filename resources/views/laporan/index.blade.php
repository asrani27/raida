@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laporan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              {{-- <div class="card-header">
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/laporan/petugas" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Petugas</a>
                <a href="/laporan/wilayah" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Wilayah</a>
                <a href="/laporan/tim" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Tim</a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              {{-- <div class="card-header">
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="/laporan/periode" target="_blank">
                  @csrf
                  Bulan
                  <select name="bulan" class="form-control">
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                  </select>
                  Tahun
                  <select name="tahun" class="form-control">
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                  </select>
                  Jenis Laporan
                  <select name="jenis" class="form-control" required>
                    <option value="">-pilih-</option>
                    <option value="1">Jadwal </option>
                    <option value="2">Monitoring</option>
                  </select>
                  <br/>
                  <button type="submit" class="btn btn-primary btn-block">Print</button>
                  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    
</div>
@endsection

@push('js')

@endpush
