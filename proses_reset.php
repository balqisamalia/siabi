<?php
 include 'crud/koneksi/koneksi.php';
 if (isset($_POST['btnReset'])) 
 {
  $username = $_POST['username'];
  $cek = mysql_query("SELECT username FROM login WHERE username = '$username' ");
  if (mysql_num_rows($cek) == 1 ) 
  {
   $password   = $_POST['password'];
   $repassword = $_POST['repassword'];
   if($password != $repassword)
   {
    ?>
     <script>
      alert("Inputan password tidak sama");
      window.location.href = 'reset_pass.php';
     </script>
    <?php
   }else
   {
    $pass = md5($password);
    $sql = mysql_query("UPDATE login SET password = '$pass' WHERE username = '$username' ");
    if ($sql) 
    {
     ?>
      <script>
       alert("Password telah di perbarui");
       window.location.href = 'login.php';
      </script>
     <?php
    }else
    {
     ?>
      <script>
       alert("Password gagal diperbaharui");
       window.location.href = 'reset_pass.php';
      </script>
     <?php
    }
   }
  }else
  {
   ?>
    <script>
     alert("Pastikan username yang anda masukan benar!");
     window.location.href = 'reset_pass.php';
    </script>
   <?php
  }
 }
?>