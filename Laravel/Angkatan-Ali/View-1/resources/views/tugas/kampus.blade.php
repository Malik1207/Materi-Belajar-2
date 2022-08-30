<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampus</title>
    <style>
        body {
            background: white;
        }
        
        div {
            width: 500px;
            padding: 30px 80px 80px;
            background: #f8f8f8;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
			box-shadow: 1px 0px 5px, -1px 0px 5px;
            
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
        }

        th, td {
            padding: 10px;
        }

        th {
            text-align: center;
        }

        tr:nth-child(2n+2) {
			background: #f2f2f2;
		}
        
    </style>
</head>
<body>
    <div>
        <h1>Tabel Siswa</h1>
        <table border = '1'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Fakultas</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php $i = 1; echo $i++ ?></td>
                    <td>Maulana Assyafi'i Ramadhan</td>
                    <td>Multimedia</td>
                    <td>Design Character</td>
                </tr>

                <tr>
                    <td><?= $i++ ?></td>
                    <td>Muhammad</td>
                    <td>Multimedia</td>
                    <td>UI UX</td>
                </tr>
                
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Maulana Assyafi'i Ramadhan</td>
                    <td>Multimedia</td>
                    <td>Photography</td>
                </tr>

                <tr>
                    <td><?= $i++ ?></td>
                    <td>Maulana Assyafi'i Ramadhan</td>
                    <td>Multimedia</td>
                    <td>Photography</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>