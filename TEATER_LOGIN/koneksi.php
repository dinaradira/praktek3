<?php

$conn = mysqli_connect(
    "localhost",
    "2526_03",
    "12345678",
    "2526_03db"
);

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>