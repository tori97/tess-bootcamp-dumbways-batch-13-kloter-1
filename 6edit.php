<?php
include"6koneksi.php";
	$id=$_POST['id'];
	$nama=$_POST['nm'];
	$stok=$_POST['st'];
	$deskripsi=$_POST['ds'];
	mysqli_query($koneksi,"update products set name='$nama',stok='$stok',deskripsi='$deskripsi' where id='$id'")or die(mysql_error());
	header("location:index.php");
	$pesan='berhasil update data';

	echo json_encode($pesan);	

?>