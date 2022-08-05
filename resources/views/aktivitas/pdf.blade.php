{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print to PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .garis-t {
        border-top: 4px solid #000;
        margin: 0;
            opacity: 1;
        }
        .p-t{
            margin-bottom: 0px;
            margin-top: 20px
            font-size: 18px;
        }
        .p-s{
            margin-bottom: 0px;
            font-size: 15px;
        }
        .title-s{
            font-size: 23px;
            font-weight: 700;
        }
        .jenis-surat{
            text-decoration: underline;
            margin: 0
        }
        .header-title{
            margin-top: 30px
        }
        .center-s {
            display: flex;
            justify-content: center;
        }
        th {
            width: 20%;
        }
        td{
            width: 80%
        }
        .tanda-tangan {
            float: right;
        }
        .date-s{
            margin-bottom: 100px
        }
      
    </style>  
</head>
  <body>
    <div class="row">
        <div class="col-3">
            <div class="logo-s">
                <img src="" alt="" class="img" width="200pz">
            </div>
        </div>
        <div class="col-9">
            <div class="header-title text-center">
                <p class="p-t">PEMERINTAH KABUPATEN INDRAMAYU
                <br>
                DINAS PERIKANAN DAN KELAUTAN
                <br>
                CABANG DINAS PENDIDIKAN WILAYAH IX
                </p>
                <b class="title-s">SMA NEGERI 1 LOSARANG</b>
                <p class="p-s">Jalan Raya Losarang Telp. (0234) 5508945, 505206
                    <br>
                    Website : www.sman1-losarang.sch.id E-mail : sman1losarang@yahoo.co.id
                <br>
                Kab. Indramayu Kode Pos 4525</p>
            </div>
        </div>
      </div>
        <hr class="garis-t">
    
        
        
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tambak</th>
                    <th>Tanggal Tabur Bibit</th>
                    <th>Jumlah Benih</th>
                    <th>Tanggal Tabur Pakan</th>
                    <th>Jumlah Pakan</th>
                    <th>Jenis Pakan</th>
                    <th>Usia Tambak</th>
                    <th>Prediksi Panen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($jadwal as $jad)
            <tr>
                <td>{{ $jad->tambak->nama_tambak }}</td>
                                <td>{{ $jad->tgl_bibit }}</td>
                                <td>{{ $jad->jumlah_bibit }}</td>
                                <td>{{ $jad->tgl_pakan }}</td>
                                <td>{{ $jad->jumlah_pakan }}</td>
                                <td>{{ $jad->jenis_pakan }}</td>
                                <td>{{ $jad->usia_tambak }}</td>
                                <td>{{ $jad->tgl_panen }}</td>
                                <td>{{ $jad->aksi }}</td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <script>
        window.print();
    </script>
</body>
</html> --}}

<!doctype html>
<html lang="en">
    <head>
        <title>Aktivitas Budidaya Perikanan</title>
        <style type="text/css">
        body {font-family: arial;background-color: #ccc}
        .rangkasurat {width: 980px;margin: 0 auto; background-color: #fff; height: 500px; padding: 20px;}
        table{border-bottom: 5px solid #000; padding: 2px}
        .tengah {text-align: center; line-height: 5px;}
        </style>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="rangkasurat">
            <table width="100%">
                <tr>
                    <td><img src="{{ asset('assets/img/logo.png')}}"></td>
                    <td class="tengah">
                        <h2>PEMERINTAHAN DAERAH KABUPATEN IDRAMAYU</h2>
                        <h2>DINAS PERIKANAN DAN KELAUTAN</h2>
                        <h2>CABANG DINAS PERIKANAN DAN KELAUTAN WILAYAH V</h2>
                        <h3>PRODUKTIVITAS BUDIDAYA PERIKANAN</h3>
                        <b>Jl. Raya Pabean Udik No.1, Pabeanudik, Kec. Indramayu, Kab. Indramayu, Jawa Barat 45219</b>
                    </td>
                </tr>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tambak</th>
                        <th>Tanggal Tabur Bibit</th>
                        <th>Jumlah Benih</th>
                        <th>Tanggal Tabur Pakan</th>
                        <th>Jumlah Pakan</th>
                        <th>Jenis Pakan</th>
                        <th>Usia Tambak</th>
                        <th>Prediksi Panen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($jadwal as $jad)
                <tr>
                    <td>{{ $jad->tambak->nama_tambak }}</td>
                                    <td>{{ $jad->tgl_bibit }}</td>
                                    <td>{{ $jad->jumlah_bibit }}</td>
                                    <td>{{ $jad->tgl_pakan }}</td>
                                    <td>{{ $jad->jumlah_pakan }}</td>
                                    <td>{{ $jad->jenis_pakan }}</td>
                                    <td>{{ $jad->usia_tambak }}</td>
                                    <td>{{ $jad->tgl_panen }}</td>
                                    <td>{{ $jad->aksi }}</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        
        <script>
            window.print();
        </script>
    </body>
</html>