<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print to PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
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