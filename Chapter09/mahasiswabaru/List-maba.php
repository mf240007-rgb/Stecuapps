
<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru ULBI</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php if (isset($_GET['status'])): ?>
<script>
    <?php if ($_GET['status'] == 'sukses'): ?>
        suksesPesan("Data berhasil ditambahkan!");
    <?php elseif ($_GET['status'] == 'update'): ?>
        suksesPesan("Data berhasil diupdate!");
    <?php endif; ?>
</script>
<?php endif; ?>


<header class="header-list">
    <h3>Pendaftaran Mahasiswa Baru</h3>
</header>
     
<nav class="nav-action">
    <a href="form-daftar.php" class="btn-tambah">+ Tambah Data</a>
</nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>alamat</th>
            <th>jenis kelamin</th>
            <th>agama</th>
            <th>sekolah asal</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $sql = "SELECT * FROM pendaftaran"; 
        $query = mysqli_query($db, $sql);
        
        $no = 1;

while($maba = mysqli_fetch_assoc($query)){
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$maba['nama']."</td>";
    echo "<td>".$maba['alamat']."</td>";
    echo "<td>".$maba['jenis_kelamin']."</td>";
    echo "<td>".$maba['agama']."</td>";
    echo "<td>".$maba['sekolah_asal']."</td>";
    echo "<td>
        <a href='form-daftar.php?no=".$maba['no']."'>Edit</a> | 
        <a href='hapus.php?no=".$maba['no']."' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
    </td>";
    echo "</tr>";
}
?>
</table>
<script src="js/script.js"></script>
</body>
</html>
