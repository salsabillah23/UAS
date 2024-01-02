<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <style>
        table,
        td,
        th {
            border: 1px solid;
            text-align: center;
            font-size: 15px
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        .title {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="title">
         <h1>Laporan Data Mahasiswa</h1> 
    </div>
  
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->fakultas }}</td>
                    <td>{{ $data->jurusan }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->no_hp }}</td>
                    <td>{{ $data->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
