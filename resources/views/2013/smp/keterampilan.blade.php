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

    <title>Keterampilan</title>
</head>

<body>
    <div class="page" size="F4-SMP">
        <div class="p-5">
            <table border="1" width=100% >
                <thead>
                    <tr>
                        <th rowspan="2" width="45">No</th>
                        <th rowspan="2">Mata Pelajaran</th>
                        <th colspan="3">Keterampilan</th>
                    </tr>
                    <tr>
                        <th>Angka</th>
                        <th>Predikat</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">Kelompok A</td>
                    </tr>
                    @php $idx = 0 @endphp
                    @foreach($keterampilan_A as $pk)
                    @php $idx++ @endphp
                    <tr>
                        <td style="text-align:center">{{$idx}}</td>
                        <td width="285">{{$pk['subyek']}}</td>
                        <td style="text-align:center">{{$pk['nilai_keterampilan']}}</td>
                        <td style="text-align:center">{{$pk['predikat_keterampilan']}}</td>
                        <td style="text-align:center">{{$pk['deskripsi_keterampilan']}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="5">Kelompok B</td>
                    </tr>
                    @php $idx = 0 @endphp
                    @foreach($keterampilan_B as $pk)
                    @php $idx++ @endphp
                    <tr>
                        <td style="text-align:center">{{$idx}}</td>
                        <td width="285">{{$pk['subyek']}}</td>
                        <td style="text-align:center">{{$pk['nilai_keterampilan']}}</td>
                        <td style="text-align:center">{{$pk['predikat_keterampilan']}}</td>
                        <td style="text-align:center">{{$pk['deskripsi_keterampilan']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>