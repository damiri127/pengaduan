<?php 
	require 'koneksi.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql  = mysqli_query($con, "select * from masyarakat where username='$user' and password='$pass' ");
	$cek  = mysqli_num_rows($sql);


		if ($cek > 0) {
			$data = mysqli_fetch_array($sql);
			session_start();
			$_SESSION['nama'] = $user;
			$_SESSION['nik'] = $data['nik'];
			header('location:utama.php');
 		}else{ ?>
 				<script type="text/javascript">
   				alert ('Username dan Password tidak ditemukan, Silahkan Periksa Kembali');
   				window.location="index.php";
   				</script>
   	<?php
   }
?>
 		


