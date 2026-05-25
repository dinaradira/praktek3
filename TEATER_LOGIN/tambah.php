<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO pengurus_teater
    (nama, jenis_kelamin, jabatan, alamat)

    VALUES(
    '$nama',
    '$jenis_kelamin',
    '$jabatan',
    '$alamat'
    )";

    if(mysqli_query($conn, $sql)){
        header("location:dashboard.php");
    } else {
        echo "Error : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pengurus</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="logo">🎭</div>

<h1>DATA PENGURUS TEATER</h1>

<p>Isi Data Pengurus ❤️</p>

<form method="POST">

<input type="text"
name="nama"
placeholder="Masukkan Nama"
required>

<select name="jenis_kelamin" required>

<option value="">Pilih Jenis Kelamin</option>

<option value="Laki-laki">
Laki-laki
</option>

<option value="Perempuan">
Perempuan
</option>

</select>

<input type="text"
name="jabatan"
placeholder="Masukkan Jabatan"
required>

<input type="text"
name="alamat"
placeholder="Masukkan Alamat"
required>

<button type="submit" name="submit">
💖 Simpan Data
</button>

</form>

</div>

</body>
</html>