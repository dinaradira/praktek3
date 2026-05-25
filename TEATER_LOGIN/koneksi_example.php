<?php

$conn = mysqli_connect(
    "localhost",
    "USERNAME_DATABASE",
    "PASSWORD_DATABASE",
    "NAMA_DATABASE"
);

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>