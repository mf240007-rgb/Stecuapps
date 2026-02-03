<?php
include("config.php");

$edit = false;
$maba = [];

if (isset($_GET['no'])) {
    $edit = true;
    $no = (int)$_GET['no'];
    $sql = "SELECT * FROM pendaftaran WHERE no=$no";
    $query = mysqli_query($db, $sql);
    $maba = mysqli_fetch_assoc($query);

     if (!$maba) {
        die("Data tidak ditemukan");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <div class="judul">
        <h1><?= $edit ? 'Edit Data Mahasiswa' : 'Formulir Pendaftaran'; ?></h1>
    </div>
</header>

<form action="<?= $edit ? 'proses-edit.php' : 'proses-pendaftaran.php'; ?>" method="POST">

<?php if($edit): ?>
<input type="hidden" name="no" value="<?= $maba['no']; ?>">
<?php endif; ?>

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama"
    value="<?= $edit ? $maba['nama'] : ''; ?>" required>
</div>

<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" required><?= $edit ? $maba['alamat'] : ''; ?></textarea>
</div>

<div class="form-group">
    <label>Jenis Kelamin</label>
    <label>
        <input type="radio" name="jenis_kelamin" value="laki-laki"
        <?= ($edit && $maba['jenis_kelamin']=='laki-laki') ? 'checked' : ''; ?>>
        Laki-Laki
    </label>
    <label>
        <input type="radio" name="jenis_kelamin" value="perempuan"
        <?= ($edit && $maba['jenis_kelamin']=='perempuan') ? 'checked' : ''; ?>>
        Perempuan
    </label>
</div>

<div class="form-group">
    <label>Agama</label>
    <select name="agama" required>
        <option value="">-- Pilih --</option>
        <option <?= ($edit && $maba['agama']=='Islam')?'selected':''; ?>>Islam</option>
        <option <?= ($edit && $maba['agama']=='Kristen')?'selected':''; ?>>Kristen</option>
        <option <?= ($edit && $maba['agama']=='Hindu')?'selected':''; ?>>Hindu</option>
        <option <?= ($edit && $maba['agama']=='Budha')?'selected':''; ?>>Budha</option>
        <option <?= ($edit && $maba['agama']=='Atheis')?'selected':''; ?>>Atheis</option>
    </select>
</div>

<div class="form-group">
    <label>Sekolah Asal</label>
    <input type="text" name="sekolah_asal"
    value="<?= $edit ? $maba['sekolah_asal'] : ''; ?>" required>
</div>

<button type="submit" name="daftar" class="btn-submit">
    <?= $edit ? 'Update Data' : 'Daftar'; ?>
</button>

</form>

</body>
</html>
