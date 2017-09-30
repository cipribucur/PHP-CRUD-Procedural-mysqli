<?php
	include 'koneksi.php';
	$id 	= $_GET['id'];
	$query 	= mysqli_query($koneksi,"delete from anggota where id='$id'");
	if($query){
		echo "<script>location='index.php'</script>";
	}
?>