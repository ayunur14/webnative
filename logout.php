<?php
require_once('koneksi.php');
session_start();
unset($_SESSION['id']);
unset($_SESSION['email']);
session_destroy();
header("location:index.php");
?>