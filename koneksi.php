<?php 
$con = mysqli_connect('localhost', 'root', '', 'pengaduan');
if (mysqli_connect_errno()) {
	echo "Koneksi Gagal!" . mysqli_connect_error();
}else{
	//echo "Koneksi Berhasil!";
}
 ?>
