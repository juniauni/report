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

    <title>Capaian Pembelajaran PAUD</title>
</head>

<body>
    <div class="page" size="F4">
        <div class="p-5">
        <section>
                @php $idx = 0 @endphp
                <h6 style="text-align:center">CAPAIAN PEMBELAJARAN PAUD </h6>
                <h6 style="text-align:center">Kompetensi pembelajaran yang harus dicapai peserta didik pada akhir fase Untuk PAUD = (Fase Fondasi ) </h6>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th width="45">No</th>
                            <th>Capaian Pembelajaran</th>
                            <th>Elemen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kompetensi as $kp)
                        @php $idx++ @endphp
                        <tr>
                            <td style="text-align:center">{{$idx}}</td>
                            <td width="285">{{$kp['capaian']}}</td>
                            <td>{{$kp['elemen']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                @php $idx = 0 @endphp
                <h6 style="text-align:center">PROYEK PENGUATAN PROFIL PELAJAR PANCASILA PAUD </h6>
                <table border="1" width=100% >
                    <thead>
                        <tr>
                            <th width="45">No</th>
                            <th>Dimensi</th>
                            <th>Uraian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proyek as $pry)
                        @php $idx++ @endphp
                        <tr>
                            <td style="text-align:center">{{$idx}}</td>
                            <td width="285">{{$pry['dimensi']}}</td>
                            <td>{{$pry['uraian']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            </section>
        </div>
    </div>
</body>
</html>