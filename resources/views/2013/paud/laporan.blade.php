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
    <div class="page" size="F4">
        <div class="p-5">
            <section class="">
                <table class="center" width=80%>
                    <tr style="height:50px">
                        <td colspan="2"> 
                            <h6 style="text-align:center; font-weight: bold;" >LAPORAN PERKEMBANGAN PESERTA DIDIK</h6>
                            <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td width="175">
                            <h6>Nama Peserta Didik </h6>
                        </td>
                        <td style=>
                            <h6>: {{$siswa}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>NISN / NIS </h6>
                        </td>
                        <td>
                            <h6>: {{$nisn}} / {{$nis}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Nama Sekolah </h6>
                        </td>
                        <td>
                            <h6>: {{$sekolah}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Alamat Sekolah </h6>
                        </td>
                        <td>
                            <h6>: {{$alamat_sekolah}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Kelas </h6>
                        </td>
                        <td>
                            <h6>: {{$kelas}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Semester </h6>
                        </td>
                        <td>
                            <h6>: {{$semester}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Tahun Pelajaran </h6>
                        </td>
                        <td>
                            <h6>: {{$tahun_ajaran}}</h6>
                        </td>
                    </tr>
                </table>
            </section>
            <section>
                <table class="center"  width=80%>
                    <tbody>
                        @foreach($isi as $isi)
                        <tr>
                            <td width="125">
                                <img src="{{ URL::asset('assets/paud.jpg') }}" alt="" height="120" width="120" />
                            </td>
                            <td>
                                <p style="font-size:11px; font-weight: bold;" >{{$isi['judul']}}</p>
                                <p style="font-size:11px; text-align: justify;">{{$isi['isi']}}</p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>