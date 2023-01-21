<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Nama</th>
        </tr>

        @forelse ($arrsiswa as $data)
            <tr>
                <td>{{$data}}</td>
            </tr>
        @empty
            <p>Tidak ada data</p>
        @endforelse
    </table>
</body>
</html>
