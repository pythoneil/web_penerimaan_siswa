<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            margin: 20px auto;
            text-align: center;
            /* Menambahkan properti untuk posisi tengah */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 0;
            font-size: 24px;
        }

        p {
            line-height: 1.5;
            color: #555;

        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-bottom: 0;
            border-bottom: 2px solid #000;

        }

        .logo {
            max-width: 100px;
            max-height: 100px;
            margin-right: 20px;
        }

        .school-info {
            text-align: center;
            margin-bottom: 0;
        }

        .school-info h1 {
            text-align: center;
            margin: 0;
        }

        .school-info p {
            line-height: 1.5;
            color: #555;
            font-weight: 600;
        }

        .title {
            text-decoration: underline;
            line-height: 1.5;
            margin-bottom: 0;
        }

        footer {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="header">
            <div class="school-info">
                <h1>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN.</h1>
                <h1>SMPN 3 BANJARHARJO</h1>
                <p class"alamat">Bandungsari, Jl, Bandungsari, Kec. Banjarharjo, Kabupaten Brebes, Jawa Tengah 52265</p>
            </div>
        </div>

        <h2 class="title">SURAT KETERANGAN</h2>
        <p>Nomor: ... /... /....</p>
        <p>Dengan ini menyatakan bahwa calon siswa di bawah ini :</p>
        <table>
            @foreach ($datas as $data)

            
            <tr>
                <th>Nama Siswa</th>
                <td>{{$data->name}}</td>
            </tr>
            <tr>
                <th>Asal Sekolah</th>
                <td>{{$data->asal_sekolah}}</td>
            </tr>
            <tr>
                <th>Hasil Seleksi</th>
                <td>
                    <span class="badge
                {{ $data->status == '1' ? 'text-bg-warning' : ($data->status == '2' ? 'text-bg-success' : ($data->status == '3' ? 'text-bg-danger' : 'text-bg-secondary')) }}">
                        {{ $data->status == '1' ? 'Menunggu' : ($data->status == '2' ? 'Diterima'
                        :
                        ($data->status == '3' ? 'Ditolak' : 'Unknown')) }}
                    </span>
                </td>
            </tr>
            <tr>
                <th>Skor Rata-rata</th>
                <td>{{$data->total_nilai_rata_rata}}</td>
            </tr>
            @endforeach
        </table>

        <p class="mt-5">
            Selamat kepada siswa yang telah lulus seleksi di SMPN 3 BANJARHARJO. Kami mengucapkan selamat atas prestasi
            yang telah dicapai dan
            kami harapkan agar prestasi ini dapat terus dipertahankan di tingkat yang lebih tinggi.
        </p>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>