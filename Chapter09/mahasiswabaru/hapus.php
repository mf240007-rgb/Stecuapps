<?php
include("config.php");

if(!isset($_GET['no'])){
    die("Akses dilarang");
}

$no = $_GET['no'];

$sql = "DELETE FROM pendaftaran WHERE no=$no";
$query = mysqli_query($db, $sql);

if($query){
    header("Location: list-maba.php");
} else {
    die("Gagal hapus data");
}
