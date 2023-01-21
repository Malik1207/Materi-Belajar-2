<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <link rel="stylesheet" href="/css/my-style.css"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Daftar Mahasiswa</title>
    </head>

    <body>
        <div class="container text-center my-4">
            <h1>Daftar Mahasiswa</h1>
            <ol>
                <?php
                    foreach ($mahasiswa as $nama) {
                        echo "<li class=\"list-group-item\"> $nama </li>";
                    };
                ?>

                {{--  <li>Nama : <?//= $nama ?></li>
                <li>Umur : <?//= $umur ?></li>
                <li>Asal : <?//= $asal ?></li>  --}}
            </ol>

            <div>
                <img class="rounded-circle img-thumbnail w-25" src="/img/bunga1.jfif" alt="">
                <img class="rounded-circle img-thumbnail w-25" src="/img/bunga2.jfif" alt="">
                <img class="rounded-circle img-thumbnail w-25" src="/img/bunga3.jpg" alt="">
            </div>
            <div>Copyright &copy; <?= date("Y") ?></div>
        </div>

        {{-- <script src="/js/my-script.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>

