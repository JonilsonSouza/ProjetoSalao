<?php
session_start();
ob_start();

unset($_SESSION['Login']);
header("Location:index.php");

?>