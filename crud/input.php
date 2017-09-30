<?php
  include 'koneksi.php';
?>
<form method="post" action="">
  <input type="text" name="nama" placeholder="masukkan nama">
  <input type="text" name="kelas" placeholder="masukkan kelas">
  <input type="radio" name="jenkel" value="laki-laki">Laki-laki<br/>
  <input type="radio" name="jenkel" value="perempuan">Perempan
  <input type="password" name="password" placeholder="masukkan password">
  <input type="submit" name="kirim">
</form>
<?php
  if(
    $_POST['nama'] &&
    $_POST['kelas'] &&
    $_POST['jenkel'] &&
    $_POST['password']
    ){
      $nama     = $_POST['nama'];
      $kelas    = $_POST['kelas'];
      $jenkel   = $_POST['jenkel'];
      $password = $_POST['password'];
  if(isset($_POST['kirim'])){
    $query = mysqli_query($koneksi, "insert into anggota(id,nama,kelas,jenkel,password) 
      values(null, '$nama', '$kelas',
      '$jenkel','$password')");
    if($query > 0){
      echo "<script>location='index.php'</script>";
    }
  }
}
  else if(isset($_POST['kirim'])){
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
