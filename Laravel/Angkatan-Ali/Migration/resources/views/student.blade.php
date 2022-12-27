<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Student</h1>
    <table class="container table-striped table table-dark table-hover">
        <tr>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nilai</th>
        </tr>
        @foreach ( $students as $students )
        <tr>
            <td> {{ $students->name }} </td>
            <td> {{ $students->jurusan }} </td>
            <td> {{ $students->tanggal_lahir }} </td>
            <td> {{ $students->alamat }} </td>
            <td> {{ $students->nilai }} </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
