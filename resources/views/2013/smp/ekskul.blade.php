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

    <title>Ekstrakurikuler</title>
</head>

<body>
    <div class="page" size="F4">
        <div class="p-5">
            @php $idx = 0 @endphp
            <h6>C. Ekstrakurikuler</h6>
            <table class="center" width=100%>
                <tr>
                    <td width="175">
                        <h6>Nama </h6>
                    </td>
                    <td style=>
                        <h6>: {{$nama}}</h6>
                    </td>
                </tr>
            </table>
            <table border="1" width=100% >
                <thead>
                    <tr>
                        <th width="45">No</th>
                        <th>Kegiatan Ekstrakurikuler</th>
                        <th>Nilai</th>
                        <th>Predikat</th>
                        <th>Keterangan</th>
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
            <h6>D. Ketidakahadiran</h6>
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
        </div>
    </div>
</body>
</html>