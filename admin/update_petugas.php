<?php 
	require '../koneksi.php';
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$telp = $_POST['telp'];
	$level = $_POST['level'];
	$id_petugas = $_POST['id_petugas']; 

	$sql = mysqli_query($con, "update petugas set nama_petugas='$nama', username='$user', password='$pass', telp='$telp', level='$level' where id_petugas='$id_petugas' "); 

	if ($sql) {
		?> 
		<script type="text/javascript"> 
		alert ('Data berhasil diedit');
		window.location="admin.php?url=lihat_petugas"; 
		</script> 
		
	<?php
   }
    else{
		echo "Error :" . mysqli_error($con);
	}
?>