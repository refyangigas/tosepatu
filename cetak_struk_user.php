<?php
include "../connection/koneksi.php";
session_start();

if (isset($_SESSION["ses_username"]) == "") {
    header("location: ../login.php");
} else {
    $data_id = $_GET["id"];
    $sql = "SELECT tb_transaksi.id, tb_user.nama as namapelanggan, tb_layanan.nama as namalayanan, tb_transaksi.jumlah, tb_pengiriman.nama as jenispengiriman, tb_penjemputan.nama as jenispenjemputan, tb_pembayaran.nama as metodepembayaran, tb_status.nama as status, tb_transaksi.tanggal, FORMAT(SUM(tb_transaksi.jumlah * tb_layanan.harga + tb_pengiriman.harga + tb_penjemputan.harga),0) AS total FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.id_user INNER JOIN tb_layanan on tb_layanan.id=tb_transaksi.layanan INNER JOIN tb_pengiriman ON tb_pengiriman.id=tb_transaksi.pengiriman INNER JOIN tb_penjemputan ON tb_penjemputan.id=tb_transaksi.penjemputan INNER JOIN tb_pembayaran ON tb_pembayaran.id=tb_transaksi.pembayaran INNER JOIN tb_status ON tb_status.id=tb_transaksi.status WHERE tb_transaksi.id = '$data_id'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Cuci Sepatu</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/metisMenu.css" rel="stylesheet">
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/tampilan.css">
</head>

<body>
    <div class="container">
        <div class="row">


            <div id="content">


                <!--dropdown end-->
                <div class="box">

                    <table class="table" id="tabel">
                        <tr>
                            <td>Kode Transaksi : </td>
                            <td><?php echo $data['id'] ?></td>
                        </tr>

                        <tr>
                            <td>Nama : </td>
                            <td><?php echo $data['namapelanggan'] ?></td>
                        </tr>
                        <tr>
                            <td>Layanan : </td>
                            <td><?php echo $data['namalayanan'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah : </td>
                            <td><?php echo $data['jumlah'] ?></td>
                        </tr>
                        <tr>
                            <td>Pengiriman : </td>
                            <td><?php echo $data['jenispengiriman'] ?></td>

                        </tr>
                        <tr>
                            <td>Penjemputan : </td>
                            <td><?php echo $data['jenispenjemputan'] ?></td>

                        </tr>
                        <tr>
                            <td>Pembayaran : </td>
                            <td><?php echo $data['metodepembayaran'] ?></td>

                        </tr>
                        <tr>
                            <td>Status : </td>
                            <td><?php echo $data['status'] ?></td>

                        </tr>
                        <tr>
                            <td>Tanggal : </td>
                            <td><?php echo $data['tanggal'] ?></td>

                        </tr>
                        <tr>
                            <td>Total : </td>
                            <td><?php echo $data['total'] ?></td>

                        </tr>
                    </table>

                </div>
            </div>


        </div>
    </div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script>
        window.print()
        window.location.href = 'orders.php';
    </script>

</body>

</html>