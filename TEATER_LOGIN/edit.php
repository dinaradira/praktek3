<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
$conn,
"SELECT * FROM pengurus_teater WHERE id='$id'"
);

$d = mysqli_fetch_array($data);

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    mysqli_query(
    $conn,

    "UPDATE pengurus_teater SET

    nama='$nama',
    jenis_kelamin='$jenis_kelamin',
    jabatan='$jabatan',
    alamat='$alamat'

    WHERE id='$id'"
    );

    header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>✏️ Edit Data Pengurus</h1>

<form method="POST">

<input type="text"
name="nama"
value="<?php echo $d['nama']; ?>"
required>

<select name="jenis_kelamin" required>

<option value="Laki-laki"
<?php if($d['jenis_kelamin']=="Laki-laki") echo "selected"; ?>>
Laki-laki
</option>

<option value="Perempuan"
<?php if($d['jenis_kelamin']=="Perempuan") echo "selected"; ?>>
Perempuan
</option>

</select>

<input type="text"
name="jabatan"
value="<?php echo $d['jabatan']; ?>"
required>

<input type="text"
name="alamat"
value="<?php echo $d['alamat']; ?>"
required>

<button type="submit" name="submit">
Update Data
</button>

</form>

</div>

</body>
</html>