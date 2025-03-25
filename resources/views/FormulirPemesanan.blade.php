<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #e7decf;
    margin: 0;
    padding: 0;
}
.navbar {
    background-color: #000080;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.navbar .logo {
    font-size: 24px;
    font-weight: bold;
}
.container {
    max-width: 700px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border: 2px solid #2C1B58;
    border-radius: 8px;
}
h1 {
    text-align: center;
    color: #2C1B58;
}
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    font-weight: bold;
    color: #2C1B58;
}
.form-group input[type="text"], 
.form-group input[type="date"], 
.form-group textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.form-group select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.submit-btn {
    background-color: #FF6A00;
    color: #2C1B58;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}
.submit-btn:hover {
    background-color: #000089;
    color: #fff;
    transform: scale(1.005);
    transition: all 0.3s ease;
}
    </style> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000080;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/resteasy.jpg') }}" alt="Logo" width="50" height="50" class="rounded-circle">
                RestEasy
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="dashboard2.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="dashboard2.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="dashboard2.php#contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="edit.php">Edit Profil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Formulir Pemesanan</h1>
        <form action="buat_invoice.php" method="POST">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group">
                <label for="checkin">Tanggal Check-In</label>
                <input type="date" id="checkin" name="checkin" required>
            </div>
            <div class="form-group">
                <label for="checkout">Tanggal Check-Out</label>
                <input type="date" id="checkout" name="checkout" required>
            </div>
            <div class="form-group">
                <label>Jumlah Tamu Dewasa</label>
                <input type="number" name="adults" value="0" min="0" required>
            </div>
            <div class="form-group">
                <label>Jumlah Tamu Anak-anak</label>
                <input type="number" name="children" value="0" min="0" required>
            </div>
            <div class="form-group">
                <label for="room-type">Tipe Kamar</label>
                <select name="room-type" id="room-type" required>
                    <option value="" disabled selected>Pilih Tipe Kamar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="request">Permintaan Khusus</label>
                <textarea id="request" name="request" rows="4" placeholder="Masukkan permintaan khusus Anda..."></textarea>
            </div>
            <button type="submit" class="submit-btn">Pesan Sekarang</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>