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
              <h6>A. Sikap</h6>
              <h6>1. Sepiritual</h6>
                <table border="1" width=100%>
                    <thead>
                        <tr">
                            <th>Predikat</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$pd}}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>2. Sosial</h6>
                <table border="1" width=100%>
                    <thead>
                        <tr">
                            <th>Predikat</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$pd}}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>B. Pengetahuan dan Keterampilan</h6>
                <p>Nama Peserta Didik: <span>{{$nama}}</span></p>
                <p>Ketuntasan Minimal: <span>75</span></p>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Muatan Pelajaran</th>
                            <th colspan="3">Pengetahuan</th>
                        </tr>
                        <tr>
                            <th>Nilai</th>
                            <th>Predikat</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$no1}}</td>
                            <td>{{$mapel1}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$pd}}</td>
                            <td>{{$des}}</td>
                        </tr>
                        <tr>
                            <td>{{$no2}}</td>
                            <td>{{$mapel2}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$pd}}</td>
                            <td>{{$des}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>C. Ekstrakurikuler</h6>
                <p>Nama Peserta Didik: <span>{{$nama}}</span></p>
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
                            <td>{{$ekskul1}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$pd}}</td>
                        </tr>
                        <tr>
                            <td>{{$no2}}</td>
                            <td>{{$ekskul2}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$pd}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>D. Ketidakhadiran</h6>
                <table border="1" width=50% >
                    <thead>
                        <tr>
                            <th colspan="3">Ketidakhadiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$hadir1}}</td>
                            <td></td>
                            <td>hari</td>
                        </tr>
                        <tr>
                            <td>{{$hadir2}}</td>
                            <td></td>
                            <td>hari</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>