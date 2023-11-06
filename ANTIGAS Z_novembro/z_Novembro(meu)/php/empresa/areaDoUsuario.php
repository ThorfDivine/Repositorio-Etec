<?php
session_start();
if (!isset($_SESSION['Pudim7w7']) || $_SESSION['Pudim7w7'] =="" || $_SESSION['Pudim7w7'] == null) {
    header('Location: ../../html/login.html');
}?>

