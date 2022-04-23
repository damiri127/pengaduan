<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<div class="card shadow">
    <div class="card-header">
        Tambah Data Petugas
    </div>
    <div class="card-body">
        <form method="post" action="simpan_petugas.php" class="form-horizontal" enctype="multipart/form-data">
          <div class="from-group cols-sm-6">
              <label>Nama Petugas</label>
              <input class="form-control" type="text" name="nama" required="">
          </div> 
          <div class="from-group cols-sm-6">
              <label>Username</label>
               <input class="form-control" type="text" name="user" required="">
          </div>
          <div class="from-group cols-sm-6">
              <label>Password</label>
               <input class="form-control" type="password" name="pass" required="">
          </div>
          <div class="from-group cols-sm-6">
              <label>Telepon</label>
               <input class="form-control" type="text" name="telp" required="">
          </div>
          <div class="from-group cols-sm-6">
              <label>Level</label>
               <select class="form-control" name="level">
               <option>==pilih==</option>
               <option value="admin">Admin</option>
               <option value="petugas">Petugas</option>
               </select>
          </div>
          <br>
          <div class="form-group">
              <input name="simpan" type="submit" class="btn btn-md btn-success" value="Simpan">
              <input name="reset" type="reset" class="btn btn-md btn-warning" value="Kosongkan">
          </div>                  
        </form>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>