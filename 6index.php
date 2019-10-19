<?php 
include('6koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="/6/bootstrap.min.css">
		<link rel="stylesheet" href="/6/bootstrap.css">
		<script type="text/javascript" src="/6/bootstrap.min.js"></script>
			<script type="text/javascript" src="/6/jquery-3.1.1.min.js"></script>

<style type="text/css">
	#cari{border:none;background-color:#999;text-align: center;}
	#footer{clear: both;background-color: #999;text-align: center;height: 50px;color: white;}
	input{size:40; }
</style>
</head>
<body>

<?php include"6navigasi.php";?>

<div class="container-fluid" id="content">
<div class="panel panel-deffault">
<div class="panel-body">
<div class="form-horizontal">
 <div class="form-group">

 	<label>id</label> <input type="text" name="kode" id="id" placeholder="kode ..." class='form-control'>

 </div>
 <div class="form-group">
<label>nama</label> <input type="text" name="nama" id="nama" placeholder="nama ..." class='form-control'>

 </div>
 <div class="form-group">
<label>stok</label> <input type="text" name="stok" id="stok" placeholder="harga ..." class='form-control' >

 </div>
 <div class="form-group">
<label>deskripsi</label> <input type="text" name="deskripsi" id="deskripsi" placeholder="jumlah ..." class='form-control'>

 </div>
  <div class="form-group">
<label>kategori</label> <input type="text" name="kategori" id="kategori" placeholder="kategori ..." class='form-control'>

 </div>
</div>
				<button class="btn btn-success" id="edit"><span class="glyphicon glyphicon-edit"></span> Edit</button>

</div>
</div>

<table class="table table-bordered">


		<tr class="info">
			<th >id</th>
			<th >nama</th>
			<th >stok</th>
			<th >deskripsi</th>
			<th >kategori</th>
			<th > <a href="6tambah.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>ADD NEW</button></a></th>
			
		</tr>
<?php
$data=mysqli_query($koneksi,"select * from products")or die(mysql_error());
while ($hasil=mysqli_fetch_array($data)) { ?>
		
		<tbody>
			<td >
				<?php echo $hasil['id'];?>
			</td>

			<td >
				<?php echo $hasil['name'];?>
			</td>
			<td >
				<?php echo $hasil['stok'];?>
			</td>
			<td >
				<?php echo $hasil['deskripsi'];?>
			</td>
				<td >
				<?php echo $hasil['categori_id'];?>
			</td>
			<td>
				<a href="6hapus.php?id=<?php echo $hasil['id'];?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Hapus</button> </a>

			</td>
		</tbody>

<?php
}
?>
</table>

<div id="footer"><h3> CRUD PHP & BOOTSTRAP oleh TORI</h3></div>

</div>



<script type="text/javascript">
	$(document).ready(function(){
$('#edit').click(function(){
	if ($('#id')!==''){
		var id=$('#id').val();
		var nama=$('#nama').val();
		var stok=$('#stok').val();
		var deskripsi=$('#deskripsi').val();

		$.ajax({
			url		: "http://localhost:8080/6/6edit.php",
			dataType:'json',
			type    :'POST',
			data    :{id:id,nm:nama,st:stok,ds:deskripsi},
			success : function(data){
			
				alert(data);

			}
		})
			
	}
})


$('#id').keyup(function(){
		if($(this).val() !== '')
	    {	
	    	var id=$(this).val();
			$.ajax({
				url: "http://localhost:8080/6/6proses_cari.php",
				type: "POST",
				data:{id:id},
				dataType:'json',
				success: function(json){
					$('#nama').val(json.name);
					$('#stok').val(json.stok);
					$('#deskripsi').val(json.deskripsi);
					$('#kategori').val(json.categori_id)	
				}
			})
		}
		else

		{

					$('#nama').val('tidak ada');
					$('#stok').val('tidak ada');
					$('#deskripsi').val('tidak ada');
					$('#kategori').val('tidak ada')	

		}	
	})
	});


	
</script>


</body>
</html>
