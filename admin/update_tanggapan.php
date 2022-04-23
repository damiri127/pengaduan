<?php 
  require '../koneksi.php';
  $tanggapan = $_POST['tanggapan'];
  $id = $_POST['id_tanggapan'];

  $sql = mysqli_query($con, "update tanggapan set tanggapan='$tanggapan' where id_tanggapan='$id' "); 

  if ($sql) {
    ?> 
    <script type="text/javascript"> 
    alert ('Data berhasil diedit');
    window.location="admin.php?url=lihat_tanggapan"; 
    </script> 
    
  <?php
   }
?>