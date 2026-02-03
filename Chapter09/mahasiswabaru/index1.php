<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran mahasiswa baru ulbi</title>
    <link rel="stylesheet" href="css/style.css">
</head>    
<body>

<header class="header">
    <div class="judul">
        <h1>Pendaftaran Mahasiswa Baru</h1>
        <h2>UNIVERSITAS LOGISTIK DAN BISNIS INTERNASIONAL</h2>
    </div>
</header>

<nav class="navbar">
    <ul>
        <li><a href="Form-daftar.php">Daftar</a></li>
        <li><a href="List-maba.php">Pendaftaran</a></li>
    </ul>
</nav> 

<?php if (isset($_GET['status'])): ?>
    <?php if ($_GET['status'] == 'sukses'): ?>
        <div class="alert alert-success">
            ✅ Pendaftaran berhasil! Data mahasiswa telah disimpan.
        </div>
    <?php else: ?>
        <div class="alert alert-danger">
            ❌ Pendaftaran gagal! Silakan coba lagi.
        </div>
    <?php endif; ?>
<?php endif; ?>

<p class="deskripsi">
     <img src="img/ulbi.jpg" alt="Foto ULBI" class="foto-ulbi kiri">
    <strong>Universitas Logistik dan Bisnis Internasional (ULBI)</strong>
merupakan institusi pendidikan tinggi yang berfokus pada bidang logistik, manajemen rantai pasok, bisnis, dan teknologi informasi.
ULBI secara resmi berdiri berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan RI, sebagai pengembangan dari institusi pendidikan sebelumnya yaitu Politeknik Pos Indonesia (Poltekpos) dan Sekolah Tinggi Manajemen Logistik Indonesia (STIMLOG).
</p>

<footer>
    © 2025 Universitas Logistik dan Bisnis Internasional
</footer>

</body>
</html>
