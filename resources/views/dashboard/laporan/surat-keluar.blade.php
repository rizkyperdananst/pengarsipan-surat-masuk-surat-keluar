<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Cetak Laporan Surat Keluar</title>
</head>
<body>
     <h2 style="text-align: center">Laporan Surat Keluar</h2>
     <table border="1px solid black" cellpadding="10" cellspacing="0" style="width: 100%">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>File Surat</th>
                    <th>Kategori Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Tujuan Surat</th>
                    <th>Perihal</th>
                    <th>Keterangan</th>
               </tr>
          </thead>
          <tbody>
               @php $no=1; @endphp
               @foreach ($surat_keluar as $sk)
               <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $sk->nomor_surat }}</td>
                    <td><a href="{{ url('storage/file-surat-keluar/'. $sk->file_surat) }}" target="_blank">{{ $sk->file_surat }}</a></td>
                    <td>{{ $sk->kategori_surat }}</td>
                    <td>{{ $sk->tanggal_surat }}</td>
                    <td>{{ $sk->tujuan_surat }}</td>
                    <td>{{ $sk->perihal }}</td>
                    <td>{{ $sk->keterangan }}</td>
               </tr>
               @endforeach
          </tbody>
     </table>
</body>
</html>