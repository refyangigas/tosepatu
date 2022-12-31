<?php
include "../connection/koneksi.php";
session_start();

if (isset($_SESSION["ses_username"]) == "") {
  header("location: ../login.php");
} elseif ($_SESSION["ses_role"] == '2') {
  header("location: logout.php");
} else {
  $data_id = $_SESSION["ses_id"];
  $data_nama = $_SESSION["ses_nama"];
  $data_username = $_SESSION["ses_username"];
  $data_password = $_SESSION["ses_password"];
  $data_role = $_SESSION["ses_role"];
}


?>
