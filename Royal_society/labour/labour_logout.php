<?php
session_start();

session_unset($_SESSION['labour_name']);
session_destroy();
header('location:../admin/index.php');

?>
