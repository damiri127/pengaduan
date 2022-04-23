<?php 
	require '../koneksi.php';
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$telp = $_POST['telp'];
	$level = $_POST['level'];

	$sql = mysqli_query($con, "insert into petugas(nama_petugas, username, password, telp, level) values('$nama', '$user', '$pass', '$telp', '$level') ");
	if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data berhasil ditambahkan');
			window.location="admin.php?url=lihat_petugas";
		</script>
		<?php
	} else{
		echo "Error :" . mysqli_error($con);
	}
 ?>