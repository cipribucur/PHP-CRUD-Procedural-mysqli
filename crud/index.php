<?php
	include 'koneksi.php';
	$query 	= mysqli_query($koneksi,"select * from anggota");
	$query 	= mysqli_query($koneksi, "SELECT * FROM anggota WHERE nama LIKE
	'%$_POST[cari]%' OR kelas LIKE '%$_POST[cari]%' ");
	$hasil	= mysqli_num_rows($query);
?>
<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<input type="search" name="cari"><input type="submit" name="submit">
</form>

<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if($hasil < 0){
			$nomor = 0;
				while($arr=mysqli_fetch_array($query)){
						$nomor ++;
			?>
			<tr>
				<td><?= $nomor;?></td>
				<td><?= $arr['nama']; ?></td>
				<td><?= $arr['kelas']; ?></td>
				<td><?= $arr['jenkel'];?></td>
				<td><?= $arr['password']; ?></td>
				<td><?= $arr['level'];?></td>
				<td>
					<a href="edit.php?id=<?= $arr['id']; ?>">EDIT</a>
					<a onclick="return confirm('Yakin Menghapus Data ?')" href="hapus.php?id=<?= $arr['id']; ?>">HAPUS</a>
				</td>
			</tr>	
		<?php
				} // penutup while 
			} // penutup if
	}  // penutup if
?>
	<a href="input.php" >TAMBAH DATA</a>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Kelas</td>
			<td>Jenis Kelamin</td>
			<td>Password</td>
			<td>Status</td>
			<td>Aksi</td>
		</tr>
		<?php
			$nomor = 0;
			while($arr=mysqli_fetch_array($query)){
				$nomor ++;
		?>
		<tr>
			<td><?= $nomor;?></td>
			<td><?= $arr['nama']; ?></td>
			<td><?= $arr['kelas']; ?></td>
			<td><?= $arr['jenkel'];?></td>
			<td><?= $arr['password']; ?></td>
			<td><?= $arr['level'];?></td>
			<td>
				<a href="edit.php?id=<?= $arr['id']; ?>">EDIT</a>
				<a onclick="return confirm('Yakin Menghapus Data ?')" href="hapus.php?id=<?= $arr['id']; ?>">HAPUS</a>
			</td>
		</tr>	
<?php
		} // while
?>
</table>