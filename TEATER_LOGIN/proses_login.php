<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query(
$conn,
"SELECT * FROM admin
WHERE username='$username'
AND password='$password'"
);

$cek = mysqli_num_rows($data);

if($cek > 0){

$d = mysqli_fetch_array($data);

$_SESSION['username'] = $d['username'];
$_SESSION['role'] = $d['role'];

header("location:dashboard.php");

}else{

echo "
<script>
alert('LOGIN GAGAL');
window.location='index.php';
</script>
";

}
?>