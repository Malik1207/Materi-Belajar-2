<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                background:
            }

            table {
                border-collapse: collapse;
                border: 1px solid black;
                margin: auto;
            }

            th, td {
                padding: 10px 15px;
                text-align: center;
            }

            td {
                color: #B36666;
            }

            tr:nth-child(2n+3) {
                background: #E6CCCC;
            }

            .th {
                background: #B36666;
                color: white
            }
        </style>
    </head>
    <body>
        <div>
            <table border='1'>
                <tr class='th'>
                    <th rowspan='2'>No</th>
                    <th colspan='3'>Jenis Hewan</th>
                    <th rowspan='2'>Keterangan</th>
                </tr>

                <tr class='th'>
                    <th>Herbivora</th>
                    <th>Karnivora</th>
                    <th>Omnivora</th>
                </tr>

                <tr>
                    <td><?php $i = 1; echo $i++ ?></td>
                    <td>Sapi</td>
                    <td>Singa</td>
                    <td>Monyet</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td><?= $i++ ?></td>
                    <td>Gajah</td>
                    <td>Serigala</td>
                    <td>Orang Utan</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td><?= $i++ ?></td>
                    <td>Kuda</td>
                    <td>Harimau</td>
                    <td>Beruang</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td><?= $i++ ?></td>
                    <td>Rusa</td>
                    <td>Anjing</td>
                    <td>Musang</td>
                    <td>-</td>
                </tr>
            </table>
        </div>
    </body>
</html>