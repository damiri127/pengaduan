<?php 
	require 'koneksi.php';
	$tgl = date('Y/m/d');
	$nik = $_POST['nik'];
	$lap = $_POST['laporan'];
	$ft = $_FILES['foto']['name'];
	$file = $_FILES['foto']['tmp_name'];
	$status = 0;

	$sql = mysqli_query($con, "insert into tb_pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) values ('$tgl', '$nik', '$lap', '$ft', '$status')");
	move_uploaded_file($file, "foto/".$ft);

	if ($sql) {
		?>
		<script type="text/javascript">
			alert('Data berhasil disimpan, Terima kasih telah mengirim laporan');
			window.location ="utama.php";
		</script>
		<?php
	} else{
		echo "Error :" . mysqli_error($con);
	}
 ?>