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

    <title>Nilai Hasil Belajar</title>
</head>

<body>
    <div class="page" size="F4">
        <div class="p-5">
            <section class="">
                <div class="row extra-info">
                    <div class="col-8">
                        <table style="font-weight: bold">
                            <tr>
                                <td><p>Nama Peserta Didik </p></td>
                                <td><p>: {{$nama}}</p></td>
                            </tr>
                            <tr>
                                <td><p>NISN/NIS </p></td>
                                <td><p>: {{$nisn}}</p></td>
                            </tr>
                            <tr>
                                <td><p>Nama Sekolah </p></td>
                                <td><p>: {{$sekolah}}</p></td>
                            </tr>
                            <tr>
                                <td><p>Alamat Sekolah </p></td>
                                <td><p>: {{$alamat_sekolah}}</p></td>
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
            <section>
                @php $idx = 0 @endphp
                <h6>A. Kompetensi Sikap</h6>
                <table border="1" width=100%>
                    <thead>
                        <tr">
                            <th colspan="2" >Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kompetensi_sikap as $ks)
                        @php $idx++ @endphp
                        <tr>
                            <td width="330">{{$idx}}. {{$ks['subyek']}}</td>
                            <td style="text-align:center">{{$ks['deskripsi']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                @php $idx = 0 @endphp
                <h6>B. Pengetahuan dan Keterampilan</h6>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th rowspan="2" width="45">No</th>
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
                        @foreach($pengetahuan_keterampilan as $pk)
                        @php $idx++ @endphp
                        <tr>
                            <td style="text-align:center">{{$idx}}</td>
                            <td width="285">{{$pk['subyek']}}</td>
                            <td style="text-align:center">{{$pk['nilai_pengetahuan']}}</td>
                            <td style="text-align:center">{{$pk['predikat_pengetahuan']}}</td>
                            <td style="text-align:center">{{$pk['deskripsi_pengetahuan']}}</td>
                            <td style="text-align:center">{{$pk['nilai_keterampilan']}}</td>
                            <td style="text-align:center">{{$pk['nilai_keterampilan']}}</td>
                            <td style="text-align:center">{{$pk['deskripsi_keterampilan']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                @php $idx = 0 @endphp
                <h6>C. Ekstrakurikuler</h6>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th width="45">No</th>
                            <th>Kegiatan Ekstrakurikuler</th>
                            <th>Nilai</th>
                            <th>Predikat</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ekstrakurikuler as $ekskul)
                        @php $idx++ @endphp
                        <tr>
                            <td style="text-align:center" style="text-align:center" style="text-align:center">{{$idx}}</td>
                            <td width="285">{{$ekskul['kegiatan']}}</td>
                            <td style="text-align:center" style="text-align:center" style="text-align:center">{{$ekskul['nilai']}}</td>
                            <td style="text-align:center" style="text-align:center" style="text-align:center">{{$ekskul['predikat']}}</td>
                            <td style="text-align:center" style="text-align:center" style="text-align:center">{{$ekskul['deskripsi']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <h6>D. Saran - Saran</h6>
                <table border="1" width=100% >
                    <tbody>
                        <tr>
                            <td>{{$saran}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>E. Tinggi dan Berat Badan</h6>
                @php $idx = 0 @endphp
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th rowspan="2" width="45">No</th>
                            <th rowspan="2" width="285">Semester</th>
                            <th colspan="2">Aspek Yang Dinilai</th>
                        </tr>
                        <tr>
                            <th>Tinggi (CM)</th>
                            <th>Berat (KG)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tinggi_berat as $tb)
                        @php $idx++ @endphp
                        <tr>
                            <td style="text-align:center" style="text-align:center">{{$idx}}</td>
                            <td>{{$tb['subyek']}}</td>
                            <td style="text-align:center" style="text-align:center">{{$tb['nilai_1']}}</td>
                            <td style="text-align:center" style="text-align:center">{{$tb['nilai_2']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <h6>F. Kondisi Kesehatan</h6>
                @php $idx = 0 @endphp
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th width="45">No</th>
                            <th colspan="2">Aspek Fisik</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kesehatan as $ksh)
                        @php $idx++ @endphp
                        <tr>
                            <td style="text-align:center">{{$idx}}</td>
                            <td width="285">{{$ksh['aspek']}}</td>
                            <td style="text-align:center">{{$ksh['keadaan']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <h6>G. Prestasi</h6>
                @php $idx = 0 @endphp
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th width="45">No</th>
                            <th colspan="2">Jensi Prestasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prestasi as $prs)
                        @php $idx++ @endphp
                        <tr>
                            <td style="text-align:center">{{$idx}}</td>
                            <td  width="285">{{$prs['subyek']}}</td>
                            <td style="text-align:center">{{$prs['nilai']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <h6>H. Ketidakahadiran</h6>
                <table border="1" width=50% >
                    <tbody>
                        @foreach($ketidakhadiran as $kth)
                        <tr>
                            <td>{{$kth['alasan']}}</td>
                            <td>: {{$kth['hari']}} hari</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <table border="1" width=100% >
                    <tbody>
                        <tr>
                            <td>
                                <p style="font-weight: bold">KEPUTUSAN</p>
                                <p>Berdasarkan hasil yang dicapai pada semester I dan II, peserta :</p>
                                <p>Naik ke kelas    : </p>
                                <p>Tinggal di kelas : </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
            </section>
            <section class="">
                <div class="row extra-info">
                    <div class="col-8">
                        <table style="font-weight: bold">
                            <tr>
                                <td>
                                    <br><br><br>
                                    <h6>Orang Tua/Wali </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><br> </h6>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-4">
                        <table style="font-weight: bold">
                            <tr>
                                <td>
                                    <br><br><br>
                                    <h6>Malang, 01 Januari 2022</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Guru Kelas, </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><br> </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>NIY. 992318005 </h6>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <table class="center" width=40%>
                            <tr>
                                <td>
                                    <br><br><br>
                                    <h6>Mengetahui, </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Kepala Sekolah </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><br> </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Wiwik Heriyanti. S. TH </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>NIY. 992318005 </h6>
                                </td>
                            </tr>
                    </table>
                </div>
            </section>
        </div>
    </div>
</body>
</html>