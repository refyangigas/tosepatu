<?php
include "../connection/koneksi.php";
session_start();

if (isset($_SESSION["ses_username"]) == "") {
  header("location: ../login.php");
} elseif ($_SESSION["ses_role"] == '2') {
  header("location: orders.php");
} else {
  $data_id = $_SESSION["ses_id"];
  $data_nama = $_SESSION["ses_nama"];
  $data_username = $_SESSION["ses_username"];
  $data_password = $_SESSION["ses_password"];
  $data_role = $_SESSION["ses_role"];
}

$data_penjualan = mysqli_query($koneksi, "SELECT tb_transaksi.tanggal, sum(tb_layanan.harga*tb_transaksi.jumlah+tb_penjemputan.harga+tb_pengiriman.harga) as total FROM tb_transaksi INNER JOIN tb_layanan ON tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_status ON tb_status.id=tb_transaksi.status WHERE tb_status.nama = 'selesai' AND MONTH(tb_transaksi.tanggal)=MONTH(curdate()) AND YEAR(tb_transaksi.tanggal)=YEAR(curdate()) GROUP BY tb_transaksi.tanggal");
  
$data_tanggal = array();
$data_total = array();

while ($data = mysqli_fetch_array($data_penjualan)) {
  $data_tanggal[] = date('d-m-Y', strtotime($data['tanggal']));
  $data_total[] = $data['total'];
}

$data_order = mysqli_query($koneksi, "SELECT date_format(tb_transaksi.tanggal, '%M') AS bulan, COUNT(tb_transaksi.id) as jml_order FROM tb_transaksi GROUP BY MONTH(tb_transaksi.tanggal)");

$order_bulan = array();
$order_total = array();

while ($row = mysqli_fetch_array($data_order)) {
  $order_bulan[] = $row['bulan'];
  $order_total[] = $row['jml_order'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>Dashboard Tosepatu</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="
        background-image: url('../assets/img/nv-bg.jpg');
        background-position-y: 50%;
      ">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <div class="min-height-300 position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php">
        <img src="../assets/images/icon.png" class="navbar-brand-img h-100" alt="main_logo" />
        <span class="ms-1 font-weight-bold">Tosepatu Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">


        <li class='nav-item'>
          <a class='nav-link active' href='dashboard.php'>
            <div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='ni ni-tv-2 text-warning text-sm opacity-10'></i>
            </div>
            <span class='nav-link-text ms-1'>Dashboard</span>
          </a>
        </li>

        <?php

if ($data_role == '1') {

    echo "


  <li class='nav-item'>
  <a class='nav-link' href='transaksi.php'>
    <div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
      <i class='ni ni-tag text-warning text-sm opacity-10'></i>
    </div>
    <span class='nav-link-text ms-1'>Transaksi</span>
  </a>
</li>

<li class='nav-item'>
<a class='nav-link' href='services.php'>
  <div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
    <i class='ni ni-bulb-61 text-warning text-sm opacity-10'></i>
  </div>
  <span class='nav-link-text ms-1'>Services</span>
</a>
</li>

<li class='nav-item'>
<a class='nav-link' href='users.php'>
<div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
  <i class='ni ni-single-02 text-warning text-sm opacity-10'></i>
</div>
<span class='nav-link-text ms-1'>Users</span>
</a>
</li>


<li class='nav-item'>
<a class='nav-link' href='messages.php'>
<div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
<i class='ni ni-send text-warning text-sm opacity-10'></i>
</div>
<span class='nav-link-text ms-1'>Messages</span>
</a>
</li>

<li class='nav-item'>
<a class='nav-link' href='report.php'>
<div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
<i class='ni ni-chart-bar-32 text-warning text-sm opacity-10'></i>
</div>
<span class='nav-link-text ms-1'>Report</span>
</a>
</li>

<li class='nav-item'>
<a class='nav-link' href='profile.php'>
<div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
<i class='ni ni-circle-08 text-warning text-sm opacity-10'></i>
</div>
<span class='nav-link-text ms-1'>Profile</span>
</a>
</li>


    
    
    ";
  } else {
    echo "

    
  <li class='nav-item'>
  <a class='nav-link' href='orders.php'>
    <div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
      <i class='ni ni-chart-bar-32 text-warning text-sm opacity-10'></i>
    </div>
    <span class='nav-link-text ms-1'>Order</span>
  </a>
</li>

<li class='nav-item'>
<a class='nav-link' href='messages-users.php'>
  <div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
    <i class='ni ni-send text-warning text-sm opacity-10'></i>
  </div>
  <span class='nav-link-text ms-1'>Messages</span>
</a>
</li>

<li class='nav-item'>
<a class='nav-link' href='profile.php'>
  <div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
    <i class='ni ni-circle-08 text-warning text-sm opacity-10'></i>
  </div>
  <span class='nav-link-text ms-1'>Profile</span>
</a>
</li>


";
  }


  ?>


</ul>
</div>



</aside>
<main class="main-content position-relative border-radius-lg">
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
<div class="container-fluid py-1 px-3">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm">
        <a class="opacity-5 text-white" href="javascript:;">Pages</a>
      </li>
      <li class="breadcrumb-item text-sm text-white active" aria-current="page">
        Dashboard
      </li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
  </nav>
  <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
    <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center"> -->
    <!-- <div class="input-group">
        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Type here..." />
      </div> -->
    <!-- </div> -->
    <ul class="ms-md-auto pe-md-3 d-flex align-items-center navbar-nav justify-content-end">
      <!-- <li class="nav-item d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
          <i class="fa fa-user me-sm-1"></i>
          <span class="d-sm-inline d-none">Sign In</span>
        </a>
      </li> -->
      <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
          </div>
        </a>
      </li>


      <?php
      error_reporting(0);


      $tampilprofil = ("SELECT id, nama, username, password  FROM tb_user WHERE id = '$data_id'");
      $result   = mysqli_query($koneksi, $tampilprofil);

      while ($row = mysqli_fetch_array($result)) {

        $profilName   = $row['nama'];

      ?>

        <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
            <span class="d-sm-inline d-none">Halo, <?php echo $profilName ?></span>
          </a>
        </li>

      <?php

      }
      ?>


      <li class="nav-item dropdown pe-2 d-flex align-items-center">
        <a href="#" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-chevron-circle-down cursor-pointer"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">

          <li class="dropdown-item d-flex align-items-center">
            <a href="profile.php" class="dropdown-item">
              <i class="fa fa-user fixed-plugin-button-nav cursor-pointer"></i> Profile
            </a>

          </li>
          <li class="dropdown-item d-flex align-items-center">
            <a href="logout.php" class="dropdown-item">
              <i class="fa fa-sign-out cursor-pointer"></i> Logout
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</div>
</nav>
<!-- End Navbar -->
<div class="container-fluid py-4">
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">
                Month Money
              </p>

              <?php
              error_reporting(0);


              $sql = ("SELECT format(sum(tb_layanan.harga*tb_transaksi.jumlah+tb_penjemputan.harga+tb_pengiriman.harga),0) as total FROM tb_transaksi INNER JOIN tb_layanan ON tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_status ON tb_status.id=tb_transaksi.status WHERE tb_status.nama = 'selesai' AND MONTH(tb_transaksi.tanggal)=MONTH(curdate()) AND YEAR(tb_transaksi.tanggal)=YEAR(curdate())");
              $result   = mysqli_query($koneksi, $sql);

              while ($row = mysqli_fetch_array($result)) {

                $total   = $row['total'];

              ?>



                <?php

                if ($total == '') {
                  echo "
                  <h5 class='font-weight-bolder'> Rp. 0</h5>
                  ";
                } else {

                  echo "

                  <h5 class='font-weight-bolder'>Rp. $total</h5>
                  
                  ";
                }

                ?>




              <?php

              }
              ?>

              <!-- <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder">+55%</span>
                since yesterday
              </p> -->
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">
                Month Transaction
              </p>


              <?php
              error_reporting(0);


              // $sql = ("SELECT COUNT(*) as jml_transaksi FROM tb_transaksi WHERE tb_transaksi.tanggal = curdate()");

              $sql = ("SELECT COUNT(*) as jml_transaksi FROM tb_transaksi WHERE MONTH(tb_transaksi.tanggal)=MONTH(curdate()) AND YEAR(tb_transaksi.tanggal)=YEAR(curdate())");
              $result   = mysqli_query($koneksi, $sql);

              while ($row = mysqli_fetch_array($result)) {

                $jml_transaksi   = $row['jml_transaksi'];

              ?>



                <?php

                if ($jml_transaksi == '') {
                  echo "
                  <h5 class='font-weight-bolder'>0</h5>
                  ";
                } else {

                  echo "

                  <h5 class='font-weight-bolder'>$jml_transaksi</h5>
                  
                  ";
                }

                ?>




              <?php

              }
              ?>

              <!-- <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder">+3%</span>
                since last week
              </p> -->
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">
                Total Users
              </p>
              <?php