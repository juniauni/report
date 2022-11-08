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
    <div class="page" size="F4">
        <div class="p-5">
            <section class="">
                <table class="center">
                    <tr>
                        <td style="text-align:center"><img src="{{ URL::asset('assets/logo.jpg') }}" alt="" /></td>
                    </tr>
                    <tr style="height:150px">
                        <td style="text-align:center"> <h4 style="font-weight: bold">LAPORAN</h4></td>
                    </tr>
                    <tr style="height:150px">
                        <td style="text-align:center"> 
                            <h4 style="font-weight: bold">HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK</h4>
                            <h4 style="font-weight: bold">SEKOLAH DASAR</h4>
                            <h4 style="font-weight: bold">(SD)</h4>
                        </td>
                    </tr>
                    <tr style="height:100px">
                        <td style="text-align:center">
                            <h5>Nama Peserta Didik :</h5>
                            <h5> {{$nama}}</h5>
                        </td>
                    </tr>
                    <tr style="height:50px">
                        <td style="text-align:center">
                            <h5>NISN :</h5>
                            <h5> {{$nisn}}</h5>
                        </td>
                    </tr>
                    <tr style="height:200px">
                        <td style="text-align:center"> 
                            <h4 style="font-weight: bold">KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN REPUBLIK</h4>
                            <h4 style="font-weight: bold">INDONESIA</h3>
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
</body>
</html>