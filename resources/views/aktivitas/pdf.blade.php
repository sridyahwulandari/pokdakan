<!doctype html>
<html lang="en">
    <head>
        <title>Aktivitas Budidaya Perikanan</title>
        <style type="text/css">
        body {font-family: arial;background-color: #ccc}
        .rangkasurat {width: 980px;margin: 0 auto; background-color: #fff; height: 500px; padding: 20px;}
        table{border-bottom: 5px solid #000; padding: 2px}
        .tengah {text-align: center; line-height: 3px;}
        </style>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="rangkasurat">
            <table width="100%">
                <tr>
                    <td><img src="{{ asset('assets/img/logo.png')}}" width="150pz"></td>
                    <td class="tengah">
                        <h2>PEMERINTAHAN DAERAH KABUPATEN IDRAMAYU</h2>
                        <h3>DINAS PERIKANAN DAN KELAUTAN</h3>
                        <h3>PRODUKTIVITAS BUDIDAYA PERIKANAN</h3>
                        <b>Jl. Raya Pabean Udik No.1, Pabeanudik, Kec. Indramayu, Kab. Indramayu, Jawa Barat 45219</b>
                    </td>
                </tr>
            </table>
            <h2 class="text-center">Laporan Aktivitas Pembudidaya</h2>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tambak</th>
                        <th>Tanggal Tabur Bibit</th>
                        <th>Tanggal Tabur Pakan</th>
                        <th>Prediksi Panen</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($jadwal as $jad)
                <tr>
                    <td>{{ $jad->tambak->nama_tambak }}</td>
                                    <td>{{ $jad->tgl_bibit }}</td>
                                    <td>{{ $jad->tgl_pakan }}</td>
                                    <td>{{ $jad->tgl_panen }}</td>
                                    <td>{{ $jad->aksi }}</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        
        <script>
            window.print();
        </script>
    </body>
</html>