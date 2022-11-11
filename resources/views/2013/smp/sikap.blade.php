<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <title>Identitas Siswa</title>
</head>

<body>
    <div class="page" size="F4-SMP">
        <div class="p-5">
        <section class="">
                <div class="row extra-info">
                    <div class="col-8">
                        <table style="font-weight: bold">
                            <tr>
                                <td><p>Nama Sekolah </p></td>
                                <td><p>: {{$sekolah}}</p></td>
                            </tr>
                            <tr>
                                <td><p>Alamat Sekolah </p></td>
                                <td><p>: {{$alamat_sekolah}}</p></td>
                            </tr>
                            <tr>
                                <td><p>Nama Peserta Didik </p></td>
                                <td><p>: {{$nama}}</p></td>
                            </tr>
                            <tr>
                                <td><p>NISN/NIS </p></td>
                                <td><p>: {{$nisn}}</p></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-4">
                        <table style="font-weight: bold">
                            <tr>
                                <td><p>Kelas </p></td>
                                <td><p>: {{$kelas}}</p></td>
                            </tr>
                            <tr>
                                <td><p>Semester </p></td>
                                <td><p>: {{$semester}}</p></td>
                            </tr>
                            <tr>
                                <td><p>Tahun Ajaran </p></td>
                                <td><p>: {{$tahun}}</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <br>
            <section>
                <h6 style="font-weight: bold">A. Sikap</h6>
                <h6 style="font-weight: bold">1. Sikap Sosial</h6>
                <table width=100% border="1" style="text-align:center">
                    <thead>
                        <tr">
                            <th >Predikat</th>
                            <th >Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center">
                                <p>{{$spiritual['predikat']}}</p>
                            </td>
                            <td>
                            <p>{{$spiritual['deskripsi']}}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6 style="font-weight: bold">2. Sikap Sosial</h6>
                <table width=100% border="1" style="text-align:center">
                    <thead>
                        <tr">
                            <th >Predikat</th>
                            <th >Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center">
                                <p>{{$spiritual['predikat']}}</p>
                            </td>
                            <td>
                            <p>{{$spiritual['deskripsi']}}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>