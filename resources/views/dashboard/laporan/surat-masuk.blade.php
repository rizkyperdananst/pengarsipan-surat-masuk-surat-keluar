<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Cetak Laporan Surat Masuk</title>
</head>
<body>
     <h2 style="text-align: center">Laporan Surat Masuk</h2>
     <table border="1px solid black" cellpadding="10" cellspacing="0" style="width: 100%">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>File Surat</th>
                    <th>Kategori Surat</th>
                    <th>Sifat Surat</th>
                    <th>Asal Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal Diterima</th>
                    <th>Perihal</th>
                    <th>Keterangan</th>
               </tr>
          </thead>
          <tbody>
               @php $no=1; @endphp
               @foreach ($surat_masuk as $sm)
               <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $sm->nomor_surat }}</td>
                    <td><a href="{{ url('storage/file-surat-masuk/'. $sm->file_surat) }}" target="_blank">{{ $sm->file_surat }}</a></td>
                    <td>{{ $sm->kategori_surat }}</td>
                    <td>{{ $sm->sifat_surat }}</td>
                    <td>{{ $sm->asal_surat }}</td>
                    <td>{{ $sm->tanggal_surat }}</td>
                    <td>{{ $sm->tanggal_diterima }}</td>
                    <td>{{ $sm->perihal }}</td>
                    <td>{{ $sm->keterangan }}</td>
               </tr>
               @endforeach
          </tbody>
     </table>
</body>
</html>