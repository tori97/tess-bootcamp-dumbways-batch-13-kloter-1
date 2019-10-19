<?php
include"6koneksi.php";
$id=$_GET['id'];
mysqli_query($koneksi,"delete from products where id='$id'")or die(mysql_error());
header("location:6index.php");
?>