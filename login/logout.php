<?php
   session_start();
   session_destroy();
?>

<div align="center">
  echo "<script> alert('Anda Berhasil Logout.');window.location='register.php' </script>";
</div>