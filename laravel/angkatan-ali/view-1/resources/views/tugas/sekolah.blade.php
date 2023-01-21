<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sekolah</title>
    <style>
        body {
            background: #f8f8f8;
            background: #212121;
            color: #f8f8f8
        }

        div {
            width: 500px;
            background: black;
            padding: 30px 80px 80px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
			box-shadow: 1px 0px 5px, -1px 0px 5px;
            
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
        }

        th {
            text-align: center;
        }

        tr:nth-child(2n+2) {
			background: #212121;
		}

    </style>
</head>
<body>
    <div>
        <h1>Pembagian Jurusan</h1>
        <table border='1'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>alamat</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php $i = 1; echo $i++ ?></td>
                    <td>Agus Wiyono</td>
                    <td>Teknik Komputer</td>
                    <td>Jakarta</td>
                </tr>

                <tr>
                    <td><?= $i++ ?></td>
                    <td>Aldi Amrillah</td>
                    <td>Pertanian</td>
                    <td>Bandung</td>
                </tr>

                <tr>
                    <td><?= $i++ ?></td>
                    <td>Andi Yoga Pratama</td>
                    <td>Pemerintahan</td>
                    <td>Bekasi</td>
                </tr>

                <tr>
                    <td><?= $i++ ?></td>
                    <td>Gagah Al Haqqi</td>
                    <td>Pertahanan</td>
                    <td>Bekasi</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>