<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #2C1B58;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #000080;
            color: white;
        }
        .status-lunas {
            background-color: #28a745;
            color: white;
            padding: 5px;
            border-radius: 4px;
        }
        .status-belum {
            background-color: #ffc107;
            color: black;
            padding: 5px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Daftar Tagihan</h2>
    <table>
        <thead>
            <tr>
                <th>ID Tagihan</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>Andi</td>
                <td>2025-03-26</td>
                <td>Rp 500.000</td>
                <td><span class="status-lunas">Lunas</span></td>
            </tr>
            <tr>
                <td>002</td>
                <td>Budi</td>
                <td>2025-03-27</td>
                <td>Rp 750.000</td>
                <td><span class="status-belum">Belum Lunas</span></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
