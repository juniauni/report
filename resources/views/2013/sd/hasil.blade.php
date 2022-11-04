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
                        <table>
                            <tr>
                                <td><p>Nama Peserta Didik </p></td>
                                <td><p>: <span>{{$nama}}</span></p></td>
                            </tr>
                            <tr>
                                <td><p>NISN/NIS </p></td>
                                <td><p>: <span>{{$nis}}</span></p></td>
                            </tr>
                            <tr>
                                <td><p>Nama Sekolah </p></td>
                                <td><p>: <span>{{$sekolah}}</span></p></td>
                            </tr>
                            <tr>
                                <td><p>Alamat Sekolah </p></td>
                                <td><p>: <span>{{$alamat}}</span></p></td>
                            </tr>
                        </table>
                        </div>
                        <div class="col-4">
                            <table>
                                <tr>
                                    <td><p>Kelas </p></td>
                                    <td><p>: <span>{{$kelas}}</span></p></td>
                                </tr>
                                <tr>
                                    <td><p>Semester </p></td>
                                    <td><p>: <span>{{$semester}}</span></p></td>
                                </tr>
                                <tr>
                                    <td><p>Tahun Ajaran </p></td>
                                    <td><p>: <span>{{$tahun}}</span></p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section>
              <h6>A. Kompetensi Sikap</h6>
                <table border="1" width=100%>
                    <thead>
                        <tr">
                            <th colspan="2">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$sepiritual}}</td>
                            <td>{{$catatan}}</td>
                        </tr>
                        <tr>
                            <td>{{$sosial}}</td>
                            <td>{{$catatan}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>B. Pengetahuan dan Keterampilan</h6>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Muatan Pelajaran</th>
                            <th colspan="3">Pengetahuan</th>
                            <th colspan="3">Keterampilan</th>
                        </tr>
                        <tr>
                            <th>Nilai</th>
                            <th>Predikat</th>
                            <th>Deskripsi</th>
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
                            <td>{{$nilai}}</td>
                            <td>{{$pd}}</td>
                            <td>{{$des}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>C. Saran - Saran</h6>
                <table border="1" width=100% >
                    <tbody>
                        <tr>
                            <td>{{$saran}}</td>
                        </tr>
                    </tbody>
                </table>
                <br style="page-break-after: always;">
                <h6>D. Tinggi dan Berat Badan</h6>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Aspek Yang Di Nilai</th>
                            <th colspan="2">Semester</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$no1}}</td>
                            <td>{{$tinggi}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$pd}}</td>
                        </tr>
                        <tr>
                            <td>{{$no2}}</td>
                            <td>{{$berat}}</td>
                            <td>{{$nilai}}</td>
                            <td>{{$pd}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>E. Kondisi Kesehatan</h6>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th colspan="2">Aspek Fisik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$no1}}</td>
                            <td>{{$mapel1}}</td>
                            <td>{{$nilai}}</td>
                        </tr>
                        <tr>
                            <td>{{$no2}}</td>
                            <td>{{$mapel2}}</td>
                            <td>{{$nilai}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>G. Prestasi</h6>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th colspan="2">Jenis Prestasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$no1}}</td>
                            <td>{{$mapel1}}</td>
                            <td>{{$nilai}}</td>
                        </tr>
                        <tr>
                            <td>{{$no2}}</td>
                            <td>{{$mapel2}}</td>
                            <td>{{$nilai}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>I. Ketidakhadiran</h6>
                <table border="1" width=50% >
                    <tbody>
                        <tr>
                            <td>{{$mapel1}}</td>
                            <td>{{$nilai}}</td>
                        </tr>
                        <tr>
                            <td>{{$mapel2}}</td>
                            <td>{{$nilai}}</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>