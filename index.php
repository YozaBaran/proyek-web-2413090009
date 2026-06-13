<?php
include 'koneksi.php';

$query = mysqli_query($con, "SELECT * FROM dosen");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px;
        }

        .container{
            width: 80%;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }

        h2{
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table th{
            background: #0f8f16;
            color: white;
            padding: 14px;
            text-align: center;
        }

        table td{
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .id{
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Data Dosen</h2>

   <table>
    <tr>
        <th>ID</th>
        <th>Nama Dosen</th>
        <th>Mata Kuliah</th>
    </tr>

    <?php while($data = mysqli_fetch_array($query)) { ?>

    <tr>
        <td class="id"><?= $data['id_dosen'] ?></td>
        <td><?= $data['nama_dosen'] ?></td>
        <td><?= $data['mata_kuliah'] ?></td>
    </tr>

    <?php } ?>

</table>

</div>

</body>
</html>