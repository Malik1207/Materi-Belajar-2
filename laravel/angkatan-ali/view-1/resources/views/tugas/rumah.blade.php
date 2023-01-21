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
            display: flex;
            justify-content: center;
        }

        table {
            border-collapse: collapse;
            border: 2px solid black;
            margin-top: 25%;
        }

        th {
            background: rgb(255,192,0);;
            padding: 10px 20px;
        }

        .tr td{
            text-align: center;
            font-size: 30px;
            padding: 10px;
            background: white
        }

        .tr1 td {
            background: rgb(255,230,153);
            padding: 10px 20px;
        }

        .tr2 td {
            background: #FFF2CC;
            padding: 10px 20px;   
        }
    </style>
</head>
<body>
    <div>
        <table border='1'>
            <tr class='tr'>
                <td colspan='6' class=''>Pendataan Keluarga</td>
            </tr>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jumlah Saudara</th>
                <th>Jumlah Adik</th>
                <th>Jumlah Kakak</th>
            </tr>

            <tr class='tr1'>
                <td><?php $i = 1; echo $i++ ?></td>
                <td>Mauli</td>
                <td>Rawalumbu</td>
                <td>6 Saudara</td>
                <td>1</td>
                <td>4</td>
            </tr>

            <tr class='tr2'>
                <td><?= $i++ ?></td>
                <td>Udin</td>
                <td>Banjar</td>
                <td>3 Saudara</td>
                <td>1</td>
                <td>1</td>
            </tr>

            <tr class='tr1'>
                <td><?= $i++ ?></td>
                <td>Hakase</td>
                <td>Betawi</td>
                <td>2 Saudara</td>
                <td>1</td>
                <td>Tidak Ada</td>
            </tr>
        </table>
    </div>
</body>
</html>