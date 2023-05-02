<?php
include '../../config/koneksi.php';


// if (isset($_POST['submit'])) {
$no_kamar = $_POST['no_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$fasilitas = $_POST['fasilitas'];
$harga = $_POST['harga'];

$query = mysqli_query($koneksi, "INSERT INTO kamar (id_kamar, no_kamar, tipe_kamar, fasilitas, harga, status) VALUES ('','$no_kamar','$tipe_kamar','$fasilitas','$harga','tersedia')");
// }

if ($query == 1) {
    $message = "Data Berhasil di tambahkan!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.href = '../data-kamar.php';
    </script>";
} else {
    $message = "Data Gagal di tambahkan!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.href = 'data-kamar.php';
    </script>";
    // header("Location: ../");
}
