<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
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
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%;
            background-color: #000080;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0033cc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Proses Pembayaran</h2>
    <form action="{{ url('/proses_pembayaran') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah Pembayaran:</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <div class="form-group">
            <label for="metode">Metode Pembayaran:</label>
            <select class="form-control" id="metode" name="metode">
                <option value="transfer">Transfer Bank</option>
                <option value="ewallet">E-Wallet</option>
                <option value="cash">Tunai</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
    </form>
</div>

</body>
</html>
