<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #FEE4D0;
        }
        
        table {
            border-collapse: collapse;
            margin: auto;
            background: #FEE4D0;
            border: 3px solid #FCC99F;
        }

        td, th {
            padding: 10px 15px;
        }

        tr:nth-child(2n+2) {
            background: #FCC99F;
        }
    </style>
</head>
<body>
    <div>
        <table border='1'>
            <tr>
                <th rowspan='2'>No</th>
                <th rowspan='2'>Nama Penjual</th>
                <th colspan='3'>Pendapata Pada Hari</th>
            </tr>

            <tr>
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
            </tr>

            <tr>
                <td><?php $i = 1; echo $i++ ?></td>
                <td>Endang</td>
                <td>100000</td>
                <td>300000</td>
                <td>350000</td>
            </tr>

            <tr>
                <td><?php $i = 1; echo $i++ ?></td>
                <td>Andi</td>
                <td>120000</td>
                <td>230000</td>
                <td>300000</td>
            </tr>

            <tr>
                <td><?php $i = 1; echo $i++ ?></td>
                <td>Astuti</td>
                <td>190000</td>
                <td>340000</td>
                <td>450000</td>
            </tr>
        </table>
    </div>
</body>
</html>