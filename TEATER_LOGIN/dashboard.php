<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="navbar">
    <div class="judul-navbar">
        🎭 STRUKTUR KEPENGURUSAN EKSTRAKURIKULER TEATER
    </div>

    <div class="admin-navbar">
        Halo, 2526_03
    </div>
</div>

<div class="container">

<div class="logo">
🎭
</div>

<h1>STRUKTUR KEPENGURUSAN TEATER 🎭</h1>

<p>Selamat Datang di Website Kepengurusan Teater ❤️</p>

<div class="menu">
    <?php
if($_SESSION['role']=="admin"){
?>
<a href="tambah.php">➕ Tambah Data</a>
<?php
}
?>
    <a href="logout.php">🚪 Logout</a>
</div>

<table>

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Jabatan</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;

$data = mysqli_query($conn,"SELECT * FROM pengurus_teater");

while($d = mysqli_fetch_array($data)){
?>

<tr>

<td><?php echo $no++; ?></td>

<td><?php echo $d['nama']; ?></td>

<td><?php echo $d['jenis_kelamin']; ?></td>

<td><?php echo $d['jabatan']; ?></td>

<td><?php echo $d['alamat']; ?></td>

<td>

<?php
if($_SESSION['role']=="admin"){
?>

<a class="edit"
href="edit.php?id=<?php echo $d['id']; ?>">
Edit
</a>

<a class="hapus"
href="hapus.php?id=<?php echo $d['id']; ?>">
Hapus
</a>

<?php
}else{
echo "User";
}
?>

</td>

</tr>

<?php } ?>

</table>

</div>

<footer>
    © 2026 Struktur Kepengurusan Teater 🎭
</footer>

</body>
</html>