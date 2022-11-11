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
                            <h6 style="text-align:center; font-weight: bold;">PENUTUP</h6>
                        </td>
                    </tr>
                    <tr>
                        <td width="125"  style="vertical-align: top">
                            <img src="{{ URL::asset('assets/paud.jpg') }}" alt="" height="120" width="120"/>
                        </td>
                        <td>
                            <p style="font-size:15px; text-align: justify;">{{$isi}}</p>
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
</body>
</html>