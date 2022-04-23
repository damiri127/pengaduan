<?php 
   require 'koneksi.php';
   $nik  = $_POST['nik'];
   $nama = $_POST['nama'];
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $telp = $_POST['telp'];

   $query = mysqli_query($con, "select * from masyarakat where nik='$nik'");
   if (mysqli_num_rows($query)>0) {
      ?>
      <script type="text/javascript">
         alert('NIK sudah dipakai');
         window.location="register.php";
      </script>
      <?php
   }

   $sql = mysqli_query($con, "insert into masyarakat values('$nik', '$nama', '$user', '$pass', '$telp')");
   if ($sql) {
   	 ?>
   	<script type="text/javascript">
   		alert ('Data Behasil Disimpan, Silahkan Login');
   		window.location="index.php";
   	</script>
   	<?php
   } else{
      echo "Error :" . mysqli_error($con);
   }
?>