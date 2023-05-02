<?php
include '../../config/koneksi.php';


// if (isset($_POST['update'])) {
$id_kamar = $_POST['id_kamar'];
$no_kamar = $_POST['no_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$fasilitas = $_POST['fasilitas'];
$harga = $_POST['harga'];
// echo $fasilitas;
// die();

$query = mysqli_query($koneksi, "UPDATE kamar SET 
    no_kamar = '$no_kamar',
    tipe_kamar = '$tipe_kamar',
    fasilitas = '$fasilitas',
    harga = '$harga'
    WHERE id_kamar = '$id_kamar'
    ");
// }

if ($query == 1) {
    $message = "Data Berhasil diubah!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.href = '../data-kamar.php';
    </script>";
} else {
    $message = "Data Gagal diubah!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.href = 'data-kamar.php';
    </script>";
}
