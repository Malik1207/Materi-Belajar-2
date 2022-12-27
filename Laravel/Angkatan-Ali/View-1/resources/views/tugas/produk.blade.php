<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #f8f8f8;
        }

        table {
            margin:auto;
        }

        tr th {
            background: #35A9DB;
            padding: 15px 20px;
        }

        td {
            padding: 10px 20px;
        }

        tr:nth-child(2n+2) {
            background: #F2F2F2;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Pesanan</th>
            </tr>

            <tr>
                <td><?php $i = 1; echo $i++ ?></td>
                <td>Laptop</td>
                <td>8 juta</td>
                <td>3 buah</td>
            </tr>

            <tr>
                <td><?= $i++ ?></td>
                <td>TV</td>
                <td>3 juta</td>
                <td>6 buah</td>
            </tr>

            <tr>
                <td><?= $i++ ?></td>
                <td>HP</td>
                <td>2.5 juta</td>
                <td>12 buah</td>
            </tr>

            <tr>
                <td><?= $i++ ?></td>
                <td>Komputer</td>
                <td>12 juta</td>
                <td>2 buah</td>
            </tr>
        </table>
    </div>
</body>
</html>