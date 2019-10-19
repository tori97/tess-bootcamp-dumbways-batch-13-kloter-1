<?php
include"6koneksi.php";
if (isset($_POST['proses'])){
$id=$_POST['id'];
$nama=$_POST['nama'];
$stok=$_POST['stok'];
$deskripsi=$_POST['deskripsi'];
$kategori=$_POST['kategori'];

mysqli_query($koneksi,"insert into products values('$id','$nama','$stok','$deskripsi','$kategori')")or die(mysql_error());
header("location:6index.php");}
?>

<!DOCTYPE html>
<html>
<head>
	<title>tambah data</title>
		<link rel="stylesheet" href="/6/bootstrap.min.css">
		<link rel="stylesheet" href="/6/bootstrap.css">
		<script type="text/javascript" src="/6/bootstrap.min.js"></script>
			<script type="text/javascript" src="/6/jquery-3.1.1.min.js"></script>


<style type="text/css">
	input{border:none;background-color: #EEE;}
</style>

</head>
<body>
<?php include"6navigasi.php";?>
<div class="container">
<form action="6tambah.php" method="post" class="form-horizontal">
<table class="table table-bordered" >
		<tr><td><input type="text" name="id" placeholder="kode.." required></td></tr>
		<tr><td><input type="text" name="nama" placeholder="nama.." required></td></tr>
		<tr><td><input type="text" name="stok" placeholder="stok.." required></td></tr>
		<tr><td><input type="text" name="deskripsi" placeholder="deskripsi.." required></td></tr>
		<tr><td><input type="text" name="kategori" placeholder="kategori.." required></td></tr>
		
<tr><td><input class="btn btn-success" type="submit" name="proses" value="proses"></td></tr>
</table>
</form>
</div>
</body>
</html>
