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
            <h1 class="m-0 text-dark">Data Monitoring</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <a href="/monitoring/add" class="btn btn-sm btn-primary">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Kode Jadwal</th>
                    <th>Laporan Kegiatan</th>
                    <th>keterangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  @php
                  $no =1;
                  @endphp
                  <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->jadwal == null ? '': $item->jadwal->kode}}</td>
                            <td>{{$item->laporan}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>
                                <a href="/monitoring/edit/{{$item->id}}" class="btn btn-xs bg-gradient-warning"><i class="fas fa-edit"></i></a>
                                <a href="/monitoring/delete/{{$item->id}}" class="btn btn-xs bg-gradient-danger" onclick="return confirm('Yakin Menghapus Data Ini?');"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                  
                </table>
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

<script src="/lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endpush
