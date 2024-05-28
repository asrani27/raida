@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{route('editpetugas',['id' => $data->id])}}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">NRP petugas</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nrp" value="{{$data->nrp}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama petugas</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">alamat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Jkel</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="jkel">
                          <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>Laki-Laki</option>
                          <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="agama">
                          <option value="Islam" {{$data->agama == 'Islam' ? 'selected':''}}>Islam</option>
                          <option value="Kristen" {{$data->agama == 'Kristen' ? 'selected':''}}>Kristen</option>
                          <option value="Hindu" {{$data->agama == 'Hindu' ? 'selected':''}}>Hindu</option>
                          <option value="Budha" {{$data->agama == 'Budha' ? 'selected':''}}>Budha</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Telp</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="telp" value="{{$data->telp}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">pangkat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="pangkat" value="{{$data->pangkat}}">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Gol. Darah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="goldarah" value="{{$data->goldarah}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Satuan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="satuan" value="{{$data->satuan}}">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Kode TIM</label>
                      <div class="col-sm-10">
                        <select name="tim_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($tim as $item)
                              <option value="{{$item->id}}" {{$data->tim_id == $item->id ? 'selected':''}}>Kode : {{$item->kode}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="icon fas fa-check"></i>
                        Update</button>
                    <a href="/petugas" class="btn btn-default float-right">Kembali</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    
</div>
@endsection

@push('js')
@endpush
