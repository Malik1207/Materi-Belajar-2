<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1560626184-524744344bef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');
            background-position: center;
            background-repeat: no-repeat;
            background-size: 1600px;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            background: rgba(250, 250, 250, 0.3);
            margin: auto;
        }

        th, td {
            padding: 10px;
        }

        th {
            text-align: center;
        }

        tr:nth-child(2n+2) {
			background: rgba(222, 222, 222, 0.3);
		}
    </style>
</head>

<body>
    <div>
        <h1>List Manusia diMasjid Ini</h1>
        <table border='1'>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kerajinan</th>
            </tr>

            <tr>
                <td><?php $i = 1; echo $i++ ?></td>
                <td>Mahmud Ramadhan</td>
                <td>Samping rumah Pak RT</td>
                <td>Puasa Sunnah</td>
            </tr>

            <tr>
                <td><?= $i++ ?></td>
                <td>Ahmad Hasbullah</td>
                <td>Depan Warung Mang Acing</td>
                <td>Sering Tahajjud</td>
            </tr>

            <tr>
                <td><?= $i++ ?></td>
                <td>Abdurrachman</td>
                <td>Sebelah Warung Mang Acing</td>
                <td>Sering Tahajjud</td>
            </tr>

            <tr>
                <td><?= $i++ ?></td>
                <td>Abdillah</td>
                <td>Samping Super Market</td>
                <td>Sering Bersedekah</td>
            </tr>
        </table>
    </div>
</body>
</html>