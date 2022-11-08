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
                        <td style="text-align:center" colspan="2"> 
                            <h4>LAPORAN</h4>
                            <h4>HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK</h4>
                            <h4>SEKOLAH DASAR</h4>
                            <h4>(SD)</h4>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td width="175">
                            <h6>Nama Sekolah </h6>
                        </td>
                        <td style=>
                            <h6>: {{$sekolah}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>NIS/NSS/NDS </h6>
                        </td>
                        <td>
                            <h6>: {{$nis}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>Alamat Sekolah </h6>
                        </td>
                        <td>
                            <h6>: {{$alamat}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>Kode Pos </h6>
                        </td>
                        <td>
                            <h6>: {{$kodepos}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>Telp </h6>
                        </td>
                        <td>
                            <h6>: {{$telp}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>Kelurahan/Desa </h6>
                        </td>
                        <td>
                            <h6>: {{$keldes}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>Kecamatan </h6>
                        </td>
                        <td>
                            <h6>: {{$kecamatan}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>Kabupaten/Kota </h6>
                        </td>
                        <td>
                            <h6>: {{$kabkot}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>Provinsi </h6>
                        </td>
                        <td>
                            <h6>: {{$provinsi}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>Website </h6>
                        </td>
                        <td>
                            <h6>: {{$website}}</h6>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td>
                            <h6>E-mail </h6>
                        </td>
                        <td>
                            <h6>: {{$email}}</h6>
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
</body>
</html>