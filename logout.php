<?php 
	session_start();
	unset($_SESSION['nama']);
	session_destroy();
	header('location:index.php')
	
 ?>
<!-- <script type="text/javascript">
 alert ('Apakah anda ingin keluar?');
 window.location="index.php";
</script> -->
