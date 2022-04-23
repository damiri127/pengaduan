<?php
  if (isset($_GET['url'])) {
  	$url = $_GET['url'];

  	switch ($url) {

      case 'proses_pengaduan':
        include 'proses_pengaduan.php';
        break;

      case 'verifikasi_pengaduan':
        include 'verifikasi_pengaduan.php';
        break;

      case 'detail_pengaduan':
        include 'detail_pengaduan.php';
        break;

      case 'tanggapan':
        include 'tanggapan.php';
        break;
      
  	}
  }
else

{
     ?>
     Selamat Datang! <?php echo $_SESSION['nama']; ?> Di Website pengaduan Masyarakat Desa Jatiseeng Kidul
     <?php
     require '../koneksi.php';
     $sql = mysqli_query($con, "select * from tb_pengaduan where status='0'");
     if ($cek=mysqli_num_rows($sql)) {
       
     
     ?>
     <br>
     
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Laporan Pengaduan :</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> pengaduan dari masyarakat</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-4x text-gray-300"></i>
                                            <span class="badge badge-warning badge-counter"><?php echo $cek; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     <?php
  } }
?>