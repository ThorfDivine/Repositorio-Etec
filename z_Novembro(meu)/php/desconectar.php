<?php 
    
    session_start();
    $_SESSION['Pudim7w7'] = false;
    $_SESSION['id'] = "";
   
    session_destroy();
    echo "<script>window.location.href = '../html/login.html'</script>";
    
?>