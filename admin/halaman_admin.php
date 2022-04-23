<?php
  if (isset($_GET['url'])) {
  	$url = $_GET['url'];

  	switch ($url) {
  		case 'tulis_pengaduan':
  			include 'tulis_pengaduan.php';
  			break;

      case 'tanggapan':
        include 'tanggapan.php';
        break;

      case 'lihat_petugas':
        include 'lihat_petugas.php';
        break;

      case 'tambah_petugas':
        include 'tambah_petugas.php';
        break;

      case 'ubah_petugas':
        include 'edit_petugas.php';
        break;

      case 'hapus_petugas':
        include 'hapus_petugas.php';
        break;

      case 'lihat_masyarakat':
        include 'lihat_masyarakat.php';
        break;

      case 'hapus_masyarakat':
        include 'hapus_masyarakat.php';
        break;

      case 'lihat_pengaduan':
        include 'lihat_pengaduan.php';
        break;

      case 'lihat_tanggapan':
        include 'lihat_tanggapan.php';
        break;

      case 'hapus_tanggapan':
        include 'hapus_tanggapan.php';
        break;

      case 'ubah_tanggapan':
        include 'edit_tanggapan.php';
        break;

      case 'print_petugas':
        include 'print_petugas.php';
        break;

      case 'print_masyarakat':
        include 'print_masyarakat.php';
        break;

      case 'print_laporan':
        include 'print_laporan.php';
        break;

      case 'print_tanggapan':
        include 'print_tanggapan.php';
        break;
  	}
  }
else

{
     ?>
     Selamat Datang!<?php echo $_SESSION['nama']; ?> Di Website pengaduan Masyarakat Desa Jatiseeng Kidul
     <?php
     require '../koneksi.php';
     $sql = mysqli_query($con, "select * from tb_pengaduan where status='proses'");
     if ($cek=mysqli_num_rows($sql)) {
       
     
     ?>

                        <?php
} }
?>