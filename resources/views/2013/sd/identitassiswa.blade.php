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
                            <h6 style="font-weight: bold;"">IDENTITAS PESERTA DIDIK</h6>
                            <br><br> 
                        </td>
                    </tr>
                    <tr>
                        <td width="45">
                            <h6>1. </h6>
                        </td>
                        <td width="175">
                            <h6>Nama Peserta Didik </h6>
                        </td>
                        <td style=>
                            <h6>: {{$siswa}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">
                            <h6>2. </h6>
                        </td>
                        <td>
                            <h6>Nomor Induk </h6>
                        </td>
                        <td>
                            <h6>: {{$nis}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">
                            <h6>3. </h6>
                        </td>
                        <td>
                            <h6>Tempat, Tanggal Lahir </h6>
                        </td>
                        <td>
                            <h6>: {{$tempat_lahir}}, {{$tanggal_lahir}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">
                            <h6>4. </h6>
                        </td>
                        <td>
                            <h6>Jenis Kelamin </h6>
                        </td>
                        <td>
                            <h6>: {{$gender}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">
                            <h6>5. </h6>
                        </td>
                        <td>
                            <h6>Agama </h6>
                        </td>
                        <td>
                            <h6>: {{$agama}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">
                            <h6>6. </h6>
                        </td>
                        <td>
                            <h6>Pendidikan sebelumnya </h6>
                        </td>
                        <td>
                            <h6>: {{$pendidikan_sebelumnya}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">
                            <h6>7. </h6>
                        </td>
                        <td>
                            <h6>Alamat Peserta Didik </h6>
                        </td>
                        <td>
                            <h6>: {{$alamat}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45" rowspan="3">
                            <h6>8. </h6>
                        </td>
                        <td colspan="2" style="text-align:left">
                            <h6>Nama Orang Tua </h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Ayah </h6>
                        </td>
                        <td>
                            <h6>: {{$ayah}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Ibu </h6>
                        </td>
                        <td>
                            <h6>: {{$ibu}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45" rowspan="3">
                            <h6>9. </h6>
                        </td>
                        <td colspan="2" style="text-align:left">
                            <h6>Pekerjaan Orang Tua </h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>a. Ayah </h6>
                        </td>
                        <td>
                            <h6>: {{$pekerjaan_ayah}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>b. Ibu </h6>
                        </td>
                        <td>
                            <h6>: {{$pekerjaan_ibu}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45" rowspan="6">
                            <h6>10. </h6>
                        </td>
                        <td colspan="2" style="text-align:left">
                            <h6>Alamat Orang Tua </h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Jalan </h6>
                        </td>
                        <td>
                            <h6>: {{$jalan}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Kelurahan/Desa </h6>
                        </td>
                        <td>
                            <h6>: {{$keldes}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Kecamatan </h6>
                        </td>
                        <td>
                            <h6>: {{$kecamatan}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Kabupaten/Kota </h6>
                        </td>
                        <td>
                            <h6>: {{$kabkot}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Provinsi </h6>
                        </td>
                        <td>
                            <h6>: {{$provinsi}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="45" rowspan="4">
                            <h6>11. </h6>
                        </td>
                        <td colspan="2" style="text-align:left">
                            <h6>Wali Peserta Didik </h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>a. Nama Wali </h6>
                        </td>
                        <td>
                            <h6>: {{$nama_wali}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>b. Pekerjaan </h6>
                        </td>
                        <td>
                            <h6>: {{$pekerjaan_wali}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>c. Alamat </h6>
                        </td>
                        <td>
                            <h6>: {{$alamat_wali}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="6" colspan="2">
                            <img src="{{ URL::asset('assets/paud.jpg') }}" alt="" height="120" width="120" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br><br>
                            <h6 style="font-weight: bold;">Lawang, 20 Maret 2014 </h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 style="font-weight: bold;">Kepala Sekolah, </h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6><br> </h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 style="font-weight: bold;">Rachel Diana R, S.Pd </h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 style="font-weight: bold;">NIY. 992318005 </h6>
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
</body>
</html>