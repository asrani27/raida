<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="padding-left: 20px; padding-right:20px">
  
  <table class="tgj"  width='100%'>
    <tr>
      <td width=100 align="right"><img src="/polisi.png" width="70px"></td>
      <td align=center class="judul"><b><font size="5">
        KEPOLISIAN DAERAH KALIMANTAN SELATAN<br />RESOR BANJARBARU <br/> SATUAN SAMAPTA</font></b><br/>
        <b>JL A Yani Loktabat Sel, Kec. Banjarbaru Selatan, Kota Banjarbaru<br> Kalimantan Selatan 70714 Telp (0511) 4772266</b>
      </td>
      <td width=100 align="left"><img src="/samapta.png" width="70px"></td>
    </tr>
  </table>
  
<div class="wrapper">
  <!-- Main content -->
  <section>
    <!-- info row -->
    <br/>
    <div class="row invoice-info">
      <div class="col-sm-12 invoice-col text-center">
            <h4><strong>LAPORAN MONITORING</strong></h4>
            BULAN : {{$data->first()->bulan}}
            
        </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-sm table-bordered">
          <thead>
          <tr style="background-color: silver">
            <th>No</th>
            <th>Kode Monitoring</th>
            <th>Kode Jadwal</th>
            <th>Catatan Kegiatan TIM</th>
            <th>Keterangan</th>
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
                    <td>{{$item->jadwal->kode}}</td>
                    <td>{{$item->laporan}}</td>
                    <td>{{$item->keterangan}}</td>
                </tr>
              @endforeach
          </tbody>
        </table>
        <table width="100%">
          <tr>
            <td width="50%" style="text-align: center"><br/>
            <br/><br/><br/><br/>
            
            </td>
            <td width="50%" style="text-align: center">Banjarbaru, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br/>
              Kasat SAMAPTA Polres Banjarbaru,
              <br/><br/><br/><br/>
              AKP Siswadi S.H., MM.<br/>
              NRP : .................
            </td>
          </tr>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
