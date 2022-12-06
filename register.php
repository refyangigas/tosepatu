<?php
require('koneksi.php');
if( isset($_POST['register']) ){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    $query = "INSERT INTO user_detail VALUES ('', '$userMail', '$userPass', '$userName', 2)";
    $result = mysqli_query($koneksi, $query);
    header('Location: login.php');
}
?>