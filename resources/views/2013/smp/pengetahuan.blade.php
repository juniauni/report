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

    <title>Pengetahuan dan Keterampilan</title>
</head>

<body>
    <div class="page" size="F4-SMP">
        <div class="p-5">
        @php $idx = 0 @endphp
            <h6 style="font-weight: bold">B. Pengetahuan dan Keterampilan</h6>
            <table class="center" width=100%>
                <tr>
                    <td width="175">
                        <h6 style="font-weight: bold">Nama </h6>
                    </td>
                    <td style=>
                        <h6 style="font-weight: bold">: {{$nama}}</h6>
                    </td>
                </tr>
                <tr>
                    <td width="175">
                        <h6 style="font-weight: bold">Ketuntansan Minimal </h6>
                    </td>
                    <td style=>
                        <h6 style="font-weight: bold">: {{$kkm}}</h6>
                    </td>
                </tr>
            </table>
            <table border="1" width=100% >
                <thead>
                    <tr>
                        <th rowspan="2" width="45">No</th>
                        <th rowspan="2">Mata Pelajaran</th>
                        <th colspan="3">Pengetahuan</th>
                    </tr>
                    <tr>
                        <th>Angka</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>