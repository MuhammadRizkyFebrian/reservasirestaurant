<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Sandi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("https://media.istockphoto.com/id/1186357321/id/foto/render-3d-lobi-dan-resepsi-hotel-mewah.jpg?s=612x612&w=is&k=20&c=I2-8pCICuPuMOgUqtq7lGp_mztst0KOp48hrC4_Fzts="); /* Ganti dengan gambar latar belakang Anda */
            background-size: cover;
            color: white;
        }
        .card {
            background-color: rgba(0, 0, 0, 0.7); /* Transparan */
            border: none;
        }
        .btn-orange {
            background-color: #FFA500; /* Warna oranye */
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">REST EASY</h4>
                        <h5 class="text-center">Lupa Kata Sandi ?</h5>
                        <form method="POST" action="proses/proses_forgetpw.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">Masukkan Email Anda</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Atur Ulang Kata Sandi Anda</label>
                                <input type="password" class="form-control" id="new_password" name="new_password" required>
                            </div>
                            <button type="submit" class="btn btn-orange w-100">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
