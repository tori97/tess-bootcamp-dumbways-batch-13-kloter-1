<?php 
include('6koneksi.php');
$id=$_POST['id'];
$q=mysqli_query($koneksi,"select * from products where id='$id'");
$hasil=mysqli_fetch_array($q);

echo json_encode($hasil);

?>