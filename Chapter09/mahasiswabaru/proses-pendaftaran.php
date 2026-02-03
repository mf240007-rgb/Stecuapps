<?php
include("config.php");

// cek request POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Akses dilarang");
}

// ambil data
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah_asal'];

// query insert
$sql = "INSERT INTO pendaftaran 
(nama, alamat, jenis_kelamin, agama, sekolah_asal)
VALUES 
('$nama', '$alamat', '$jk', '$agama', '$sekolah')";

$query = mysqli_query($db, $sql);

if ($query) {
    header("Location: list-maba.php");
    exit;
} else {
    die("Gagal menyimpan data: " . mysqli_error($db));
}
