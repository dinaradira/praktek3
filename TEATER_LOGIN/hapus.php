<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query(
$conn,
"DELETE FROM pengurus_teater WHERE id='$id'"
);

header("location:dashboard.php");

?>