<?php
session_start();
if (!isset($_SESSION) || $_SESSION =="" || $_SESSION == null) {
    header('Location: ../../html/login.html');
}?>
