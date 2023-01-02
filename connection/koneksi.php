<?php
$server = "wsmif3b.id";
$username = "wsmifbid_mecherateam";
$password = "Polije1234";
$db = "wsmifbid_mecherateam";
$koneksi = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi gagal :" . mysqli_connect_error();
}
