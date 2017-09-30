<?php
include 'koneksi.php';
$id 	= $_GET['id'];
$query	= mysqli_query($koneksi, "SELECT * FROM anggota WHERE id='$id'");
$hasil	= mysqli_fetch_array($query);	
$cheked = explode(', ', $hasil['jenkel']);
?>
<form method="post" action="">
  <input type="text" name="nama" value="<?= $hasil['nama'];?>">
  <input type="text" name="kelas" value="<?= $hasil['kelas'];?>">
  <input type="radio" name="jenkel" value="laki-laki" <?php in_array('laki-laki', $cheked) ? print "checked":""; ?>>Laki-laki<br/>
  <input type="radio" name="jenkel" value="perempuan" <?php in_array('perempuan', $cheked) ? print "checked":""; ?>>Perempuan
  <input type="password" name="password" value="<?= $hasil['password']; ?>">
  <select name="level">
  	<option value="" <?php $hasil['level'] == "" ? print "selected":"";?> disabled>choose here</option>  
  	<option value="admin" <?php $hasil['level'] == "admin" ? print "selected":"";?>>admin</option>
  	<option value="user" <?php $hasil['level'] == "user" ? print "selected":"";?>>user</option>
  </select>
  <input type="submit" name="update">
</form>
<?php
	 if(
    $_POST['nama'] &&
    $_POST['kelas'] &&
    $_POST['jenkel'] &&
    $_POST['password'] &&
    $_POST['level']
    ){
      $nama     = $_POST['nama'];
      $kelas    = $_POST['kelas'];
      $jenkel   = $_POST['jenkel'];
      $password = $_POST['password'];
      $level    = $_POST['level'];
  if(isset($_POST['update'])){
    $updet = mysqli_query($koneksi, "UPDATE anggota SET nama='$nama',kelas='$kelas',
    	jenkel='$jenkel',password='$password', level='$level' WHERE id='$id'");
    if($updet){
 	  	echo "<script>alert('Data berhasil di update');</script>";	
    	echo "<script>location='index.php'</script>";
    }
    else if(!$updet){
   	  	echo "<script>alert('Data gagal di update');</script>";
    }
  }
}
  else if(isset($_POST['update'])){
    if(
    empty($_POST['nama']) ||
    empty($_POST['kelas']) ||
    empty($_POST['jenkel']) ||
    empty($_POST['password'])
    ){
      echo "<script>alert('data kosong');</script>";
    }
  }
?>