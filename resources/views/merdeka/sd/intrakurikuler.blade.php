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
    <link rel="stylesheet" href="css/style.css">

    <title>KURIKULUM 2013 SD</title>
</head>

<body>
    <div class="my-5 page" size="A4">
        <div class="p-5">
            <section class="report mt-5">
                <div class="col-14">
                    <div class="row extra-info pt-3">
                        <div class="col-8">
                            <p>Nama Peserta Didik: <span>{{$nama}}</span></p>
                            <p>NISN/NIS: <span>{{$nis}}</span></p>
                            <p>Nama Sekolah: <span>{{$sekolah}}</span></p>
                            <p>Alamat Sekolah: <span>{{$alamat}}</span></p>
                        </div>
                        <div class="col-4">
                            <p>Kelas: <span>{{$kelas}}</span></p>
                            <p>Semester: <span>{{$semester}}</span></p>
                            <p>Tahun Ajaran: <span>{{$tahun}}</span></p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Muatan Pelajaran</th>
                            <th>Nilai Akhir</th>
                            <th>Capaian Kompetensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">{{$no1}}</td>
                            <td rowspan="2">{{$mapel1}}</td>
                            <td rowspan="2">{{$nilai}}</td>
                            <td>{{$pd}}</td>
                        </tr>
                        <tr>
                            <td>{{$pd}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p>Muatan Lokal</p>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Muatan Pelajaran</th>
                            <th>Nilai Akhir</th>
                            <th>Capaian Kompetensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">{{$no1}}</td>
                            <td rowspan="2">{{$mapel1}}</td>
                            <td rowspan="2">{{$nilai}}</td>
                            <td>{{$pd}}</td>
                        </tr>
                        <tr>
                            <td>{{$pd}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ekstrakurikuler</th>
                            <th>Predikat</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$no1}}</td>
                            <td>{{$mapel1}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$pd}}</td>
                        </tr>
                        <tr>
                            <td>{{$no2}}</td>
                            <td>{{$mapel2}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$pd}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table border="1" width=50% >
                    <thead>
                        <tr>
                            <th colspan="3">Ketidakhadiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$mapel1}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$nilai}}</td>
                        </tr>
                        <tr>
                            <td>{{$mapel2}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$nilai}}</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>