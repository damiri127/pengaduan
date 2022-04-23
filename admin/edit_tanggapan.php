<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tanggapan</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<div class="card shadow">
    <div class="card-header">
        Tanggapan
    </div>
    <?php
      require '../koneksi.php';
      $sql = mysqli_query($con, "select * from tanggapan where id_tanggapan='$_GET[id]' ");
      if ($data = mysqli_fetch_array($sql)) {
      
     ?>

    <div class="card-body">
    <a href="?url=lihat_tanggapan" class="btn btn-primary">
      <span class="icon text-white-50">
      <i class="fas fa-arrow-left"></i>
      </span>
      <span class="text">Kembali</span>
    </a>
        <form method="post" action="update_tanggapan.php" class="form-horizontal" enctype="multipart/form-data">
          <div class="from-group cols-sm-6">
              <label>ID Tanggapan</label>
              <input type="text" class="form-control" readonly="" name="id_tanggapan"  value="<?php echo $_GET['id']; ?>">
          </div>
          <div class="from-group cols-sm-6">
              <label>Tanggal Tanggapan</label>
              <input class="form-control" type="text" name="tgl_tanggapan"  readonly="" value="<?php echo $data['tgl_tanggapan']?>">
          </div>
          <div class="from-group cols-sm-6">
              <label>Tanggapan Baru</label>
              <textarea class="form-control" rows="7" name="tanggapan">
              </textarea>
          </div>
          <br>
          <div class="from-group cols-sm-6">
              <label>ID Petugas</label>
              <input type="text" class="form-control" readonly="" name="id_petugas"  value="<?php echo $_SESSION['id_petugas']; ?>">
          </div>
          <br>     
              <input name="proses" type="submit" class="btn btn-md btn-success" value="Ubah">
        </form>
    </div>
</div>
<?php
}
?>


<!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>