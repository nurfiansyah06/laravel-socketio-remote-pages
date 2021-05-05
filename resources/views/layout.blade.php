<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('homepage/style.css') }}">

    <!-- FONT POPPINS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>KOMINFO PEMALANG</title>
</head>

<body>
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/pemalang.png') }}" style="max-width: 75px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link navlink-navbar mr-5" href="{{ url('/') }}">Home</a>
                    <a class="nav-link navlink-navbar" href="{{ url('/login') }}">Login as Admin</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END OF NAVBAR -->

    <section class="content">
        <div class="container">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('images/pemalang.png') }}" style="width: 200px" alt="">
                        </div>
                        <div class="col-md-10 title-card">
                            <h1><strong> DINAS KOMUNIKASI DAN INFORMATIKA </strong> <br> KABUPATEN PEMALANG</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div id="table-data"></div>
        </div>
    </section>
    <script>
         Echo.channel('EveryoneChannel')
        .listen('.EveryoneMessage', function (e) {
            const data = e.message
            $('#table-data').html(
                `<h1>List Admin</h1>
                <table class='table table-striped admin'>
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Guest</td>
                        </tr>
                    </tbody>
                </table>`
            )
        })

    Echo.channel('FirstPageChannel')
        .listen('.FirstPage', function (e) {
            const data = e.message
            $('#table-data').html(
                `<h1>List Tamu</h1>
                <table class='table table-striped tamu'>
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($guests as $guest)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $guest->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>`
            )
        })
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
