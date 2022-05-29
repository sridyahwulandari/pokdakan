<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Produktivitas Budidaya Ikan | POKDAKAN</title>
</head>
<body>
    <p>Hallo <b>{{$details['nama']}}</b> berikut ini adalah komentar Anda:</p>
    <table>
      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>{{$details['nama']}}</td>
      </tr>
      <tr>
        <td>Judul</td>
        <td>:</td>
        <td>{{$details['judul']}}</td>
      </tr>
      <tr>
        <td>Pesan</td>
        <td>:</td>
        <td>{{$details['pesan']}}</td>
      </tr>
    </table>
    <p>Terimakasih <b>{{$details['nama']}}</b> telah memberi komentar.</p>
</body>
</html>