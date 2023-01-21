<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>
    </head>

    <body>
        <h1>Daftar Mahasiswa</h1>

        <ol>
            <?php 
                // foreach ($mahasiswa as $nama) {
                // echo "<li> $nama </li>";
                // }
            ?>

            <li><?= $mahasiswa1 ?></li>
            <li><?= $mahasiswa2 ?></li>
            <li><?= $mahasiswa3 ?></li>
        </ol>

        <div>Copyright &copy; <?= date("Y") ?></div>
    </body>
</html>

<?php /**PATH /home/sendal/laravel/view2/resources/views/mahasiswa.blade.php ENDPATH**/ ?>