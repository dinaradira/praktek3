
<?php
session_start();

include 'koneksi.php';

if($_SESSION['role']!="user"){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Absensi</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>🎭 DATA ABSENSI TEATER 🎭</h1>

<p>Halaman User ❤️</p>

<div class="menu">
<a href="logout.php">Logout</a>
</div>

<table>

<tr>
<th>No</th>
<th>Nama</th>
<th>Kelas</th>
<th>Peran</th>
<th>Kehadiran</th>
</tr>

<?php
$no=1;

$data=mysqli_query(
$conn,
"SELECT * FROM absensi_teater"
);

while($d=mysqli_fetch_array($data)){
?>

<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['kelas']; ?></td>
<td><?php echo $d['peran']; ?></td>
<td><?php echo $d['kehadiran']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>
