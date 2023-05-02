<?php
include '../../config/koneksi.php';

$id_kamar = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM kamar WHERE id_kamar = '$id_kamar'");

if ($hapus == true) {
    $message = "Data berhasil dihapus.";
    echo "<script>
    alert( '$message' );
    window.location.href = '../data-kamar.php';
    </script>";
} else {
    $message = "Data gagal dihapus.";
    echo "<script>
    alert( '$message' );
    window.location.href = '../data-kamar.php';
    </script>";
}
