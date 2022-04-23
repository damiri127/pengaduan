<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cetak Data Pengaduan</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="card-body">
                        <img src="">
                        <h4 class="m-0 font-weight-bold " align="center">PEMERINTAH KABUPATEN CIREBON</h4>
                        <h5 class="m-0 font-weight-bold " align="center">DESA JATISEENG KIDUL</h5>
                        <h6 class="m-0 font-weight-bold" align="center">Jalan Pangeran Walangsungsang No. 01 kode pos 41588</h6>
                        <hr>
                        <h5 class="m-0 font-weight-bold" align="center">Laporan Pengaduan</h5>
                          <br>
                        </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <th>ID</th>
                                            <th>Tanggal Pengaduan</th>
                                            <th>NIK</th>
                                            <th>Isi Laporan</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                        </tr>
                                    <?php 
                                    require '../koneksi.php';
                                        $sql = mysqli_query($con, "select * from tb_pengaduan");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $data['id_pengaduan']; ?></td>
                                            <td><?= $data['tgl_pengaduan']; ?></td>
                                            <td><?= $data['nik']; ?></td>
                                            <td><?= $data['isi_laporan']; ?></td>
                                            <td><img src="./../foto/<?= $data['foto']; ?>" width="100"</td>
                                            <td><?= $data['status']; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                                <h6 class="m-0 font-weight-bold text-primary" align="right">JatiseengKidul, <?php echo date('d-m-Y'); ?></h6>
                                <h6 class="m-0 font-weight-bold text-primary" align="right">Petugas,</h6>
                                <br><br><br><br>
                                <h6 class="m-0 font-weight-bold text-primary" align="right"><?php echo $_SESSION['nama']; ?></h6>
                            </div>
                        </div>
                    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>