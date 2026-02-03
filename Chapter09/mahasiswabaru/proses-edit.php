<?php
include("config.php");

if (!isset($_POST['no'])) {
    die("Akses dilarang");
}

$no = (int) $_POST['no'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah_asal'];

$sql = "UPDATE pendaftaran SET
    nama='$nama',
    alamat='$alamat',
    jenis_kelamin='$jk',
    agama='$agama',
    sekolah_asal='$sekolah'
    WHERE no=$no";

$query = mysqli_query($db, $sql);

if ($query) {
    header("Location: list-maba.php");
    exit;
} else {
    echo mysqli_error($db);
}
