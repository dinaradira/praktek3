<?php
include 'koneksi.php';

$q = mysqli_query($conn,"SHOW TABLES");

while($row=mysqli_fetch_array($q)){
    echo $row[0]."<br>";
}
?>