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

    <title>Cover</title>
</head>

<body>
    <div class="page" size="F4-SMP">
        <div class="p-5">
            <section class="">
                <table class="center">
                    <tr style="height:50px">
                        <td style="text-align:center"> 
                            <h4 style="font-weight: bold">LAPORAN HASIL BELAJAR</h4>
                            <h4 style="font-weight: bold">PESERTA DIDIK</h4>
                            <h4 style="font-weight: bold">SMP KRISTEN ALETHEIA MALANG</h4>
                            <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:center"> 
                            <h6>NSS : {{$nss}}   ;   NPSN : {{$npsn}}</h6>
                            <h6>{{$alamat}} - Telp. {{$telp}}</h6>
                            <h6>email : {{$email}}</h6>
                            <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:center"><img src="{{ URL::asset('assets/logo.jpg') }}" alt="" height="440" width="440" /></td>
                    </tr>
                    <tr style="height:100px">
                        <td style="text-align:center">
                            <h5>Nama Peserta Didik :</h5>
                            <h5> {{$nama}}</h5>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td style="text-align:center">
                            <h5>Nomor Induk :</h5>
                            <h5> {{$nisn}}</h5>
                        </td>
                    </tr>
                    <tr style="height:200px">
                        <td style="text-align:center"> 
                            <h4 style="font-weight: bold">KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h4>
                            <h4 style="font-weight: bold">REPUBLIK INDONESIA</h3>
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
</body>
</html>