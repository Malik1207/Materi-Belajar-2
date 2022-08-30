<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: auto;
            border: 1px solid black;
            border-collapse: collapse;
        }

        h1 {
            text-align: center
        }

        th, td {
            padding: 10px 15px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Tabel Harga Produk</h1>
        <table border='1'>
            <tr>
                <th rowspan="2" style="background: #84CB97">Jenis</th>
                <th colspan="3" style="background: #D3ECDD">Ukuran</th>
            </tr>

            <tr>
                <th>Kecil</th>
                <th>Sedang</th>
                <th>Besar</th>
            </tr>

            <tr>
                <td>Tablet</td>
                <td>1 juta</td>
                <td>2.5 juta</td>
                <td>5 juta</td>
            </tr>

            <tr>
                <td>Komputer</td>
                <td>6 juta</td>
                <td>8.5 juta</td>
                <td>10 juta</td>
            </tr>

            <tr>
                <td>TV</td>
                <td>1 juta</td>
                <td>2 juta</td>
                <td>4 juta</td>
            </tr>

            <tr>
                <td>Laptop</td>
                <td>6 juta</td>
                <td>9 juta</td>
                <td>13 juta</td>
            </tr>

            <tr>
                <td>HP</td>
                <td>1 juta</td>
                <td>2 juta</td>
                <td>2.5 juta</td>
            </tr>
        </table>
    </div>
</body>
</html>