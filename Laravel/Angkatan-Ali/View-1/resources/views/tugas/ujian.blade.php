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

        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div>
        <table border='1'>
            <tr>
                <th rowspan="2" style="background: #EB6265">Nama</th>
                <th colspan="3" style="background: #F3F60D">Nilai</th>
            </tr>

            <tr>
                <th>Kimia</th>
                <th>Fisika</th>
                <th>Biologi</th>
            </tr>

            <tr>
                <td>Nami</td>
                <td>89</td>
                <td>78</td>
                <td>81</td>
            </tr>

            <tr>
                <td>Robby</td>
                <td style="background: red">64</td>
                <td>72</td>
                <td>83</td>
            </tr>

            <tr>
                <td>Riri</td>
                <td>91</td>
                <td>89</td>
                <td>86</td>
            </tr>

            <tr>
                <td>Danda</td>
                <td style="background: red">66</td>
                <td style="background: red">52</td>
                <td>88</td>
            </tr>

            <tr>
                <td>Jhon</td>
                <td style="background: red">64</td>
                <td style="background: red">59</td>
                <td style="background: red">61</td>
            </tr>
        </table>
    </div>
</body>
</html>