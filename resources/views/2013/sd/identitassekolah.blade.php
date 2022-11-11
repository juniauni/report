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

    <title>Identitas Sekolah</title>
</head>

<body>
    <div class="page" size="F4">
        <div class="p-5">
            <section class="">
                <table class="center" width=80%>
                    <tr style="height:150px">
                        <td style="text-align:center; font-weight: bold;" colspan="2"> 
                            <h4 style="font-weight: bold;">LAPORAN</h4>
                            <h4 style="font-weight: bold;">HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK</h4>
                            <h4 style="font-weight: bold;">SEKOLAH DASAR</h4>
                            <h4 style="font-weight: bold;">(SD)</h4>
                            <br><br>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td width="175">
                            <h6 style="font-weight: bold;">Nama Sekolah </h6>
                        </td>
                        <td style=>
                            <h6 style="font-weight: bold;">: {{$sekolah}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">NIS/NSS/NDS </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$nis}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">Alamat Sekolah </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$alamat}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">Kode Pos </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$kodepos}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">Telp </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$telp}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">Kelurahan/Desa </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$keldes}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">Kecamatan </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$kecamatan}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">Kabupaten/Kota </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$kabkot}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">Provinsi </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$provinsi}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">Website </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$website}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6 style="font-weight: bold;">E-mail </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: bold;">: {{$email}}</h6>
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
</body>
</html>