<?php
include 'koneksi.php';

$q = mysqli_query($conn,"SHOW TABLES");

if(!$q){
 die(mysqli_error($conn));
}

while($row = mysqli_fetch_array($q)){
 echo $row[0]."<br>";
}
?>