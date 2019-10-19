<?php

if (isset($_GET['proses'])){
$nim=$_GET['nim'];
$nama=$_GET['nama'];
$hadir=$_GET['hadir'];
$tugas=$_GET['tugas'];
$uts=$_GET['uts'];
$uas=$_GET['uas'];
$grade='';


$nilhadir=(10/100*100)*$hadir;
$niltugas=(20/100*100)*$tugas;
$niluts=(30/100*100)*$uts;
$niluas=(40/100*100)*$uas;

$totnilai=$nilhadir+$niltugas+$niluts+$niluas;
$nilai=substr($totnilai,0,2);
if ($nilai>80) {
	$grade='A';
}elseif (($nilai > 70 ) and ($nilai < 80)) {
	$grade='B';
}elseif (($nilai>60 )and($nilai<70) ){
	$grade='C';
}elseif (($nilai>50 )and($nilai<60)) {
	$grade='D';
}elseif ($nilai<50) {
	$grade='E';
}
print('NIM'.'='.$nim);echo "<br>";
print('Nama'.'='.$nama);echo "<br>";
print('Nilai'.'='.$nilai);echo "<br>";
print('Grade'.'='.$grade);echo "<br>";
echo "<hr>";

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>NILAI SISWA</title>
</head>
<body style="text-align: center;">
<pre>
    <form action="5.php" method="get" accept-charset="utf-8">
        
<label for="">nim  		</label><input type="text" name="nim" id="" value="" required /><br />
<label for="">nama 		</label><input type="text"  name="nama" id="" value="" required /><br />
<label for="">jumlah hadir 	 </label><input type="number" min="0" max="14"  name="hadir" id="" value="" required /><br />
<label for="">tugas		 </label><input type="number" min="0" max="100" name="tugas" id="" value="" required /><br />
<label for="">uts		 </label><input type="number" min="0" max="100" name="uts" id="" value="" required /><br />
<label for="">uas		 </label><input type="number" min="0" max="100" name="uas" id="" value="" required /><br />
<label for="">nilai total 	 </label><input type="number" min="0" max="100" name="" id="total" value='<?php echo $nilai ?>' disabled="true" /><br />
<input type="submit" name="proses" id="proses" value="proses" />
</form>
</pre>
</body>

</html>

