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
                        <td colspan="3"> 
                            <h6 style="text-align:center; font-weight: bold;">LAPORAN PERTUMBUHAN PESERTA DIDIK</h6>
                            <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td width="125" rowspan="10"  style="vertical-align: top">
                            <img src="{{ URL::asset('assets/paud.jpg') }}" alt="" height="120" width="120"/>
                        </td>
                        <td colspan="2">
                            <p>Aspek pertumbuhan Ananda Aiko Valerie Tjugito dapat diketahui sebagaimana data berikut.</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="175">
                            <h6>Usia anak </h6>
                        </td>
                        <td style=>
                            <h6>: {{$usia}}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Berat badan </h6>
                        </td>
                        <td>
                            <h6>: {{$berat}} KG</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Tinggi badan </h6>
                        </td>
                        <td>
                            <h6>: {{$tinggi}} CM</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Lingkar Kepala </h6>
                        </td>
                        <td>
                            <h6>: {{$kepala}} CM</h6>
                        </td>
                    </tr>
                    @foreach($isi as $isi)
                    <tr>
                        <td colspan="2">
                            <p style="font-size:15px; font-weight: bold;">{{$isi['judul']}}</p>
                            <p style="font-size:15px; text-align: justify;">{{$isi['isi']}}</p>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </section>
        </div>
    </div>
</body>
</html>