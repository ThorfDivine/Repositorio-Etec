<?php 
session_start();
if(
    !isset($_SESSION) 
    || $_SESSION =="" 
    || $_SESSION == null 
    || !isset($_SESSION['cpf']) 
    ||  $_SESSION['cpf'] =="" 
    || $_SESSION['cpf'] == null 
    || empty($_SESSION['cpf'])
    
    ){header('Location: ../../html/login.html');}  

?>