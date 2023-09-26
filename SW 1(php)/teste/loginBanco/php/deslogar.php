<?php 
 session_start();
 $_SESSION['PUDIMLogado7w7'] = 0;
 $_SESSION['usuario'] = "";

 session_destroy();
 echo "<script>window.location.href = '../html/index.php'</script>";
 ?>