<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>Orders - Suki Dashboard</title>
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
      <a class="navbar-brand m-0" href="./dashboard.php">
        <img src="../assets/images/icon.png" class="navbar-brand-img h-100" alt="main_logo" />
        <span class="ms-1 font-weight-bold">Tosepatu Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class='nav-item'>
          <a class='nav-link  active' href='orders.php'>
            <div class='icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='ni ni-cart text-warning text-sm opacity-10'></i>
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
              Orders
            </li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Orders</h6>
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


            $tampilprofil = ("SELECT * FROM tb_user WHERE id = '$data_id'");
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

    <div class="card shadow-lg mx-4 mt-3">
      <div class="card-body">
        <div class="row gx-4">

          <!-- <div class="dropdown col-auto">
            <form class="" action="" method="post">
              <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Sort By
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <button class="dropdown-item" name="namaasc" type="submit"> Nama Asc (A-Z)</button>
                <button class="dropdown-item" name="namadesc" type="submit"> Nama Desc (Z-A)</button>
                <button class="dropdown-item" name="totalasc" type="submit">Total Desc (A-Z)</button>
                <button class="dropdown-item" name="totaldesc" type="submit">Total Asc (Z-A)</button>
              </ul>
            </form>

          </div> -->

          <div class="dropdown col-auto">
            <form class="" action="" method="post">
              <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Status
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <button class="dropdown-item" name="belum-bayar" type="submit">Belum Bayar</button>
                <button class="dropdown-item" name="pengerjaan" type="submit">Pengerjaan</button>
                <button class="dropdown-item" name="selesai" type="submit">Selesai</button>
                <button class="dropdown-item" name="gagal" type="submit">Gagal</button>
              </ul>
            </form>

          </div>

            

          <form class="row gx-4" action="" method="post">
            <div class="dropdown col-auto">

              <div class="form-group">
                <input class="form-control btn btn-sm bg-gradient-white mb-1 px-3" value="<?php if (isset($_POST['from_date'])) {
                                                                                            echo $_POST['from_date'];
                                                                                          }  ?>" type="date" name="from_date" />

              </div>

            </div>
            <div class="dropdown col-auto">

              <button class="btn btn-sm bg-gradient-white mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                To Date
              </button>

            </div>

            <div class="dropdown col-auto">

              <div class="form-group">
                <input class="form-control btn btn-sm bg-gradient-white mb-1 px-3" value="<?php if (isset($_POST['to_date'])) {
                                                                                            echo $_POST['to_date'];
                                                                                          }  ?>" type="date" name="to_date" />

              </div>

            </div>


            <div class="dropdown col-auto">

              <button class="btn btn-sm bg-gradient-dark mb-1 px-3" type="submit" aria-expanded="false">
                Filter
              </button>


            </div>

            <!-- <div class="dropdown col-auto">

              <a href="export_transaksi.php" target=”_blank” class="btn btn-sm bg-gradient-dark mb-1 px-3" aria-expanded="false"> Export</a>

            </div> -->




            <!-- <div class="col-lg-4 col-md-6 me-sm-10 mx-auto mt-0">
              <div class="nav-wrapper position-relative end-0">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                
                  <div class="input-group">
                    <input type="text" class="form-control ms-4" name="data" placeholder="Type here..." aria-label="Type here..." aria-describedby="button-addon2">
                    <button class="btn bg-gradient-dark  mb-0" name="caridata" type="submit" id="button-addon2">
                      <i class="fas fa-search" aria-hidden="true"></i>
                    </button>
                  </div>
           
                </div>
              </div>
            </div> -->
          </form>

        </div>
      </div>
    </div>




    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <h6>Orders table</h6>
                <button class="btn btn-primary btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#modal-bayar">Bayar</button>
                <button class="btn btn-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#modal-tambah">Order</button>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        No
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Status
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Nama
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Alamat
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Pembayaran
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Total
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Bukti
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Tanggal
                      </th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Tanggal Selesai
                      </th> -->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php


                    $batas = 20;
                    $halaman = @$_GET['halaman'];
                    if (empty($halaman)) {
                      $posisi = 0;
                      $halaman = 1;
                    } else {
                      $posisi = ($halaman - 1) * $batas;
                    }

                    $no = 1 + $posisi;


                    $data = $_POST['data'];


                    if (isset($_POST['belum-bayar'])) {
                      $pending = ("SELECT tb_transaksi.id, tb_user.nama, tb_status.nama AS status, tb_layanan.nama as layanan, tb_layanan.harga as hargalayanan, tb_layanan.id as idlayanan, tb_penjemputan.nama as penjemputan, tb_penjemputan.id as idpenjemputan, tb_penjemputan.harga as hargapenjemputan, tb_pengiriman.id as idpengiriman, tb_pengiriman.nama as pengiriman, tb_pengiriman.harga as hargapengiriman, tb_pembayaran.id as idpembayaran, tb_transaksi.jumlah as jumlah, FORMAT(SUM(tb_transaksi.jumlah * tb_layanan.harga + tb_pengiriman.harga + tb_penjemputan.harga),0) AS total, tb_pembayaran.nama as pembayaran, tb_transaksi.alamat, tb_transaksi.bukti as bukti, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_status ON tb_status.id=tb_transaksi.status INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_layanan ON tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_pembayaran ON tb_pembayaran.id=tb_transaksi.pembayaran INNER JOIN tb_user ON tb_user.id=tb_transaksi.id_user WHERE tb_transaksi.id_user = '$data_id' AND tb_status.nama = 'Belum Bayar' GROUP BY tb_transaksi.id LIMIT $posisi, $batas");
                      $result   = mysqli_query($koneksi, $pending);
                    } elseif (isset($_POST['pengerjaan'])) {
                      $delivery = ("SELECT tb_transaksi.id, tb_user.nama, tb_status.nama AS status, tb_layanan.nama as layanan, tb_layanan.harga as hargalayanan, tb_layanan.id as idlayanan, tb_penjemputan.nama as penjemputan, tb_penjemputan.id as idpenjemputan, tb_penjemputan.harga as hargapenjemputan, tb_pengiriman.id as idpengiriman, tb_pengiriman.nama as pengiriman, tb_pengiriman.harga as hargapengiriman, tb_pembayaran.id as idpembayaran, tb_transaksi.jumlah as jumlah, FORMAT(SUM(tb_transaksi.jumlah * tb_layanan.harga + tb_pengiriman.harga + tb_penjemputan.harga),0) AS total, tb_pembayaran.nama as pembayaran, tb_transaksi.alamat, tb_transaksi.bukti as bukti, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_status ON tb_status.id=tb_transaksi.status INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_layanan ON tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_pembayaran ON tb_pembayaran.id=tb_transaksi.pembayaran INNER JOIN tb_user ON tb_user.id=tb_transaksi.id_user WHERE tb_transaksi.id_user = '$data_id' AND tb_status.nama = 'Pengerjaan' GROUP BY tb_transaksi.id LIMIT $posisi, $batas");
                      $result   = mysqli_query($koneksi, $delivery);
                    } elseif (isset($_POST['selesai'])) {
                      $done = ("SELECT tb_transaksi.id, tb_user.nama, tb_status.nama AS status, tb_layanan.nama as layanan, tb_layanan.harga as hargalayanan, tb_layanan.id as idlayanan, tb_penjemputan.nama as penjemputan, tb_penjemputan.id as idpenjemputan, tb_penjemputan.harga as hargapenjemputan, tb_pengiriman.id as idpengiriman, tb_pengiriman.nama as pengiriman, tb_pengiriman.harga as hargapengiriman, tb_pembayaran.id as idpembayaran, tb_transaksi.jumlah as jumlah, FORMAT(SUM(tb_transaksi.jumlah * tb_layanan.harga + tb_pengiriman.harga + tb_penjemputan.harga),0) AS total, tb_pembayaran.nama as pembayaran, tb_transaksi.alamat, tb_transaksi.bukti as bukti, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_status ON tb_status.id=tb_transaksi.status INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_layanan ON tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_pembayaran ON tb_pembayaran.id=tb_transaksi.pembayaran INNER JOIN tb_user ON tb_user.id=tb_transaksi.id_user WHERE tb_transaksi.id_user = '$data_id' AND tb_status.nama = 'Selesai' GROUP BY tb_transaksi.id LIMIT $posisi, $batas");
                      $result   = mysqli_query($koneksi, $done);
                    } elseif (isset($_POST['gagal'])) {
                      $cancel = ("SELECT tb_transaksi.id, tb_user.nama, tb_status.nama AS status, tb_layanan.nama as layanan, tb_layanan.harga as hargalayanan, tb_layanan.id as idlayanan, tb_penjemputan.nama as penjemputan, tb_penjemputan.id as idpenjemputan, tb_penjemputan.harga as hargapenjemputan, tb_pengiriman.id as idpengiriman, tb_pengiriman.nama as pengiriman, tb_pengiriman.harga as hargapengiriman, tb_pembayaran.id as idpembayaran, tb_transaksi.jumlah as jumlah, FORMAT(SUM(tb_transaksi.jumlah * tb_layanan.harga + tb_pengiriman.harga + tb_penjemputan.harga),0) AS total, tb_pembayaran.nama as pembayaran, tb_transaksi.alamat, tb_transaksi.bukti as bukti, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_status ON tb_status.id=tb_transaksi.status INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_layanan ON tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_pembayaran ON tb_pembayaran.id=tb_transaksi.pembayaran INNER JOIN tb_user ON tb_user.id=tb_transaksi.id_user WHERE tb_transaksi.id_user = '$data_id' AND tb_status.nama = 'Gagal' GROUP BY tb_transaksi.id LIMIT $posisi, $batas");
                      $result   = mysqli_query($koneksi, $cancel);
                    } elseif (isset($_POST['from_date']) && isset($_POST['to_date'])) {

                      $from_date = $_POST['from_date'];
                      $to_date = $_POST['to_date'];

                      $filter_dek = ("SELECT tb_transaksi.id, tb_user.nama, tb_status.nama AS status, tb_layanan.nama as layanan, tb_layanan.harga as hargalayanan, tb_layanan.id as idlayanan, tb_penjemputan.nama as penjemputan, tb_penjemputan.id as idpenjemputan, tb_penjemputan.harga as hargapenjemputan, tb_pengiriman.id as idpengiriman, tb_pengiriman.nama as pengiriman, tb_pengiriman.harga as hargapengiriman, tb_pembayaran.id as idpembayaran, tb_transaksi.jumlah as jumlah, FORMAT(SUM(tb_transaksi.jumlah * tb_layanan.harga + tb_pengiriman.harga + tb_penjemputan.harga),0) AS total, tb_pembayaran.nama as pembayaran, tb_transaksi.alamat, tb_transaksi.bukti as bukti, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_status ON tb_status.id=tb_transaksi.status INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_layanan ON tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_pembayaran ON tb_pembayaran.id=tb_transaksi.pembayaran INNER JOIN tb_user ON tb_user.id=tb_transaksi.id_user WHERE tb_transaksi.tanggal BETWEEN '$from_date' AND '$to_date' AND tb_transaksi.id_user = '$data_id' GROUP BY tb_transaksi.id LIMIT $posisi, $batas");
                      $result   = mysqli_query($koneksi, $filter_dek);
                    } else {
                      $query  = ("SELECT tb_transaksi.id, tb_user.nama, tb_status.nama AS status, tb_layanan.nama as layanan, tb_layanan.harga as hargalayanan, tb_layanan.id as idlayanan, tb_penjemputan.nama as penjemputan, tb_penjemputan.id as idpenjemputan, tb_penjemputan.harga as hargapenjemputan, tb_pengiriman.id as idpengiriman, tb_pengiriman.nama as pengiriman, tb_pengiriman.harga as hargapengiriman, tb_pembayaran.id as idpembayaran, tb_transaksi.jumlah as jumlah, FORMAT(SUM(tb_transaksi.jumlah * tb_layanan.harga + tb_pengiriman.harga + tb_penjemputan.harga),0) AS total, tb_pembayaran.nama as pembayaran, tb_transaksi.alamat, tb_transaksi.bukti as bukti, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_status ON tb_status.id=tb_transaksi.status INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_layanan ON tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_pembayaran ON tb_pembayaran.id=tb_transaksi.pembayaran INNER JOIN tb_user ON tb_user.id=tb_transaksi.id_user WHERE tb_transaksi.id_user = '$data_id' GROUP BY tb_transaksi.id LIMIT $posisi, $batas");
                      $result = mysqli_query($koneksi, $query);
                    }


                    $no     = 1;
                    while ($row = mysqli_fetch_array($result)) {

                      $transaksiBukti = $row['bukti'];


                      $transaksiLayanan = $row['layanan'];
                      $transaksiIdLayanan = $row['idlayanan'];
                      $transaksiHargaLayanan = $row['hargalayanan'];

                      $transaksiPenjemputan = $row['penjemputan'];
                      $transaksiIdPenjemputan = $row['idpenjemputan'];
                      $transaksiHargaPenjemputan = $row['hargapenjemputan'];

                      $transaksiPengiriman = $row['pengiriman'];
                      $transaksiIdPengiriman = $row['idpengiriman'];
                      $transaksiHargaPengiriman = $row['hargapengiriman'];

                      $transaksiPembayaran = $row['pembayaran'];
                      $transaksiIdPembayaran = $row['idpembayaran'];

                      $transaksiJumlah = $row['jumlah'];


                      $transaksiId = $row['id'];
                      $transaksiNama = $row['nama'];
                      $transaksiStatus = $row['status'];
                      $transaksiAlamat = $row['alamat'];
                      $transaksiTotal = $row['total'];
                      $transaksiPembayaran = $row['pembayaran'];
                      $transaksiBukti = $row['bukti'];
                      $transaksiTanggal   = $row['tanggal'];

                    ?>


                      <tr>

                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $no++; ?></span>
                        </td>



                        <td class="align-middle text-center text-sm">

                          <?php

                          if ($transaksiStatus == "Belum Bayar") {
                            echo "
                          <span class='badge badge-sm bg-gradient-warning px-3'>Belum Bayar</span>
                          ";
                          } elseif ($transaksiStatus == "Pengerjaan") {
                            echo "
                          <span class='badge badge-sm bg-gradient-info px-4'>Pengerjaan</span>
                          ";
                          } elseif ($transaksiStatus == "Selesai") {
                            echo "
                          <span class='badge badge-sm bg-gradient-success px-4'>Selesai</span>
                            ";
                          } elseif ($transaksiStatus == "Gagal") {
                            echo "
                            <span class='badge badge-sm bg-gradient-danger'>Gagal</span>
                              ";
                          }

                          ?>

                        </td>

                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $transaksiNama; ?></span>
                        </td>


                        <td class="align-middle text-center">

                          <button class="btn btn-dark btn-sm px-3 py-1 me-1 mt-3" data-bs-toggle="modal" data-bs-target="#modal-alamat<?php echo $row['id']; ?>">Cek Alamat</button>

                        </td>


                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"> <?php echo $transaksiPembayaran; ?></span>
                        </td>



                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $transaksiTotal; ?></span>
                        </td>

                        <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $transaksiNama; ?></span>
                        </td>


                        <td class="align-middle text-center">

                          <button class="btn btn-dark btn-sm px-3 py-1 me-1 mt-3" data-bs-toggle="modal" data-bs-target="#modal-alamat<?php echo $row['id']; ?>">Cek Alamat</button>

                        </td>


                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"> <?php echo $transaksiPembayaran; ?></span>
                        </td>



                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $transaksiTotal; ?></span>
                        </td>

                        <td class="align-middle text-center">

                          <?php

                          if ($transaksiPembayaran == "Tunai") {
                            echo "
                          <button disabled class='btn btn-dark btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-bukti$transaksiId'>Upload Bukti</button>
                          ";
                          } elseif ($transaksiStatus == "Pengerjaan") {

                            echo "
                            <button disabled class='btn btn-dark btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-bukti$transaksiId'>Upload Bukti</button>
                            ";
                          } elseif ($transaksiStatus == "Selesai") {

                            echo "
                            <button disabled class='btn btn-dark btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-bukti$transaksiId'>Upload Bukti</button>
                            ";
                          } elseif ($transaksiStatus == "Gagal") {

                            echo "
                            <button disabled class='btn btn-dark btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-bukti$transaksiId'>Upload Bukti</button>
                            ";
                          } else {

                            echo "
                            <button class='btn btn-dark btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-bukti$transaksiId'>Upload Bukti</button>
                            ";
                          }


                          ?>
                        </td>


                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $transaksiTanggal; ?></span>
                        </td>



                        <td class="align-middle text-center">
                          <button class="btn btn-dark btn-sm px-3 py-1 me-1 mt-3" data-bs-toggle="modal" data-bs-target="#modal-transaksi<?php echo $row['id']; ?>">Detail</button>

                          <?php

                          if ($transaksiStatus == "Pengerjaan") {

                            echo "

                            <button disabled class='btn btn-warning btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-edit$row[id]'>Edit</button>
                            <button disabled class='btn btn-danger btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-delete$row[id]'>Delete</button>
                            
                            ";
                          } elseif ($transaksiStatus == "Selesai") {
                            echo "

                            <button disabled class='btn btn-warning btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-edit$row[id]'>Edit</button>
                            <button disabled class='btn btn-danger btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-delete$row[id]'>Delete</button>
                            
                            ";
                          } elseif ($transaksiStatus == "Gagal") {
                            echo "

                            <button disabled class='btn btn-warning btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-edit$row[id]'>Edit</button>
                            <button disabled class='btn btn-danger btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-delete$row[id]'>Delete</button>
                            
                            ";
                          } else {
                            echo "

                            <button class='btn btn-warning btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-edit$row[id]'>Edit</button>
                            <button class='btn btn-danger btn-sm px-3 py-1 me-1 mt-3' data-bs-toggle='modal' data-bs-target='#modal-delete$row[id]'>Delete</button>
                            
                            ";
                          }

                          ?>

                        </td>







<tr></tr>
</tr>

<!-- Modal Detail Delete -->
<div class="modal fade" id="modal-delete<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Detail Bukti</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="align-middle text-center">
          <h4>Anda Yakin Akan Menghapus Data Transaksi Anda ?</h4>
        </div>
        <form class="yayyay" action="orders.php?id=<?= $row['id'] ?>" method="post">
          <div class="modal-footer">
            <div class="align-middle text-center">
              <button class="btn btn-danger btn-sm ms-auto" type="submit" name="delete-order">Delete</button>
              <button type="button" class="btn btn-success btn-sm ms-auto" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- End Detail Delete -->

<!-- Modal Detail Transaksi -->

<div class="modal fade bd-example-modal-xl" id="modal-transaksi<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Layanan</label>

            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Harga</label>

            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Jumlah</label>

            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Penjemputan</label>

            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Pengiriman</label>

            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Total</label>

            </div>
          </div>
        </div>
        <?php

        $queryreport  = "SELECT tb_transaksi.id, tb_user.nama, tb_status.nama AS status, tb_layanan.nama as layanan, tb_layanan.harga, tb_transaksi.jumlah, format(tb_penjemputan.harga,0) as penjemputan, format(tb_pengiriman.harga,0) as pengiriman, FORMAT(SUM(tb_transaksi.jumlah * tb_layanan.harga + tb_pengiriman.harga + tb_penjemputan.harga),0) AS total, tb_pembayaran.nama as pembayaran, tb_transaksi.alamat, tb_transaksi.bukti, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_status ON tb_status.id=tb_transaksi.status INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_layanan ON tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_pembayaran ON tb_pembayaran.id=tb_transaksi.pembayaran INNER JOIN tb_user ON tb_user.id=tb_transaksi.id_user where tb_transaksi.id = '" . $row['id'] . "' group by tb_user.nama";
        $resultanjay = mysqli_query($koneksi, $queryreport);



        while ($data = mysqli_fetch_array($resultanjay)) {


          $reportNama = $data['layanan'];
          $reportHarga = $data['harga'];
          $reportJumlah   = $data['jumlah'];
          $reportPenjemputan = $data['penjemputan'];
          $reportPengiriman = $data['pengiriman'];
          $reportTotal  = $data['total'];


        ?>
          <div class="row centered">

            <div class="col-md-3">
              <div class="form-group">
                <span class="text-secondary text-xs font-weight-bold"><?php echo $reportNama; ?></span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $reportHarga; ?></span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <span class="text-secondary text-xs font-weight-bold"><?php echo $reportJumlah; ?></span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $reportPenjemputan; ?></span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $reportPengiriman; ?></span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">

                <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $reportTotal; ?></span>
              </div>
            </div>
          </div>

        <?php

        }


        ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm ms-auto" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn bg-gradient-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<!-- End Detail Transaksi -->



<!-- Modal Detail Bukti -->
<div class="modal fade" id="modal-bukti<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Bukti</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="orders.php?id=<?= $row['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Total</label>
            <input disabled class="form-control" id="email" type="text" value="Rp. <?php echo $transaksiTotal ?>" placeholder="" maxlength="30" name="txt_mail" id="txt_mail" required />

          </div>

          <div class="form-group">
            <label class="custom-file-label" for="customFileLang">Upload Pembayaran</label>
            <input type="file" class="form-control" name="bukti" id="foto">

          </div>
          <div class="form-group align-middle text-center">
            <img src="../foto/bukti/<?php echo $transaksiBukti ?>" alt="bukti ngab" class="w-80 border-radius-lg shadow-sm" />
          </div>
          <div class="form-group align-middle text-center">

            <?php

            if ($transaksiBukti == "") {
              // echo "<script>
              //   Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
              //   }).then((result) => {if (result.value)
              //       {window.location = 'orders.php';}
              //   })</script>";
            } else {
              echo "
          
                <button class='btn btn-warning btn-sm ms-auto' name='delete-bukti' type='submit'>Hapus Bukti</button>
        
                ";
            }

            ?>



          </div>




        </div>
        <div class="modal-footer">
          <div class="align-middle text-center">
            <button class="btn btn-success btn-sm ms-auto" type="submit" name="add-bukti">Add</button>
            <button type="button" name="delete-foto" class="btn btn-danger btn-sm ms-auto" data-bs-dismiss="modal">Close</button>
          </div>
          <!-- <button type="button" class="btn bg-gradient-primary">Save changes</button> -->
        </div>
      </form>
    </div>
  </div>
</div>


<!-- End Detail Bukti -->


<!-- Modal Detail Bayar -->
<div class="modal fade" id="modal-bayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Bayar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="form-group align-middle text-center">
        <img src="../foto/bukti/dana/p.jpg" alt="bukti ngab" class="w-80 border-radius-lg shadow-sm" />
      </div>


      <div class="modal-footer">
        <div class="align-middle text-center">

          <button type="button" class="btn btn-danger btn-sm ms-auto" data-bs-dismiss="modal">Close</button>
        </div>
        <!-- <button type="button" class="btn bg-gradient-primary">Save changes</button> -->
      </div>

    </div>
  </div>
</div>



<!-- End Detail Bayar -->




<!-- Modal Detail Alamat -->
<div class="modal fade" id="modal-alamat<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Alamat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="anjasmara" action="transaksi_detail.php?id=<?= $row['id'] ?>" method="post">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Detail</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="500" rows="5"><?= $transaksiAlamat ?></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm ms-auto" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn bg-gradient-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- End Detail Alamat -->

<!-- Modal Detail Edit -->
<div class="modal fade" id="modal-edit<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="orders.php?id=<?= $row['id'] ?>" method="post">

          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama</label>
            <input disabled class="form-control" type="text" value="<?php echo $transaksiNama ?>" placeholder="Enter Name" maxlength="30" required />

          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="edit-alamat" placeholder="Enter Address" maxlength="500" rows="2"><?php echo $transaksiAlamat ?></textarea>
          </div>


          <div class="form-group">
            <label for="exampleFormControlSelect1">Layanan</label>
            <select class="form-control" name="edit-layanan" required>
              <?php


              echo "<option value=$transaksiIdLayanan> $transaksiLayanan Rp. ($transaksiHargaLayanan)</option>";
              $query = mysqli_query($koneksi, "select  id, nama, format(harga,0) as harga from tb_layanan") or die(mysqli_error($koneksi));
              while ($row = mysqli_fetch_array($query)) {
                echo "<option value=$row[id]> $row[nama] (Rp. $row[harga])</option>";
              }

              ?>

            </select>
          </div>



          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Jumlah Sepatu</label>
            <input class="form-control" type="text" value="<?php echo $transaksiJumlah ?>" placeholder="Enter Jumlah" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" name="edit-jumlah" required />

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Penjemputan</label>
            <select class="form-control" name="edit-penjemputan" required>
              <?php

              echo "<option value=$transaksiIdPenjemputan> $transaksiPenjemputan (Rp. $transaksiHargaPenjemputan)</option>";
              $query = mysqli_query($koneksi, "select id, nama, format(harga,0) as harga from tb_penjemputan") or die(mysqli_error($koneksi));
              while ($row = mysqli_fetch_array($query)) {
                echo "<option value=$row[id]> $row[nama] (Rp. $row[harga])</option>";
              }
              ?>

            </select>
          </div>


          <div class="form-group">
            <label for="exampleFormControlSelect1">Pengiriman</label>
            <select class="form-control" name="edit-pengiriman" required>
              <?php
              include "../connection/koneksi.php";
              echo "<option value=$transaksiIdPengiriman> $transaksiPengiriman (Rp. $transaksiHargaPengiriman)</option>";
              $query = mysqli_query($koneksi, "select  id, nama, format(harga,0) as harga from tb_pengiriman") or die(mysqli_error($koneksi));
              while ($row = mysqli_fetch_array($query)) {
                echo "<option value=$row[id]> $row[nama] (Rp. $row[harga])</option>";
              }

              ?>

            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Pembayaran</label>
            <select class="form-control" name="edit-pembayaran" required>
              <?php
              include "../connection/koneksi.php";
              echo "<option value=$transaksiIdPembayaran> $transaksiPembayaran</option>";
              $query = mysqli_query($koneksi, "select * from tb_pembayaran") or die(mysqli_error($koneksi));
              while ($row = mysqli_fetch_array($query)) {
                echo "<option value=$row[id]> $row[nama]</option>";
              }

              ?>

            </select>
          </div>

          <div class="modal-footer">
            <div class="align-middle text-center">
              <button class="btn btn-success btn-sm ms-auto" type="submit" name="edit-order">Edit</button>
              <button type="button" class="btn btn-danger btn-sm ms-auto" data-bs-dismiss="modal">Close</button>
            </div>
          </div>




      </div>
      </form>
    </div>
  </div>
</div>



                      <!-- End Detail Edit -->




                      <?php
                      // $no++;
                    }


                    ?>
                  </tbody>
                </table>
              </div>


                </main>
</body>
</html>



