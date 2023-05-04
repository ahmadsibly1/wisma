<?php
include '../../config/koneksi.php';


$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$jk = $_POST['jk'];
$username = $_POST['username'];
$password = $_POST['password'];

$ekstensi_diperbolehkan    = array('png', 'jpg');
$nama = $_FILES['foto']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran    = $_FILES['foto']['size'];
$file_tmp = $_FILES['foto']['tmp_name'];

if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 1044070) {
        move_uploaded_file($file_tmp, '../../assets/file/' . $nama);
        $query = mysqli_query($koneksi, "INSERT INTO pegawai (id_pegawai, nama_pegawai, foto, alamat, no_telp, jk, username, password) VALUES('','$nama_pegawai', '$nama', '$alamat', '$no_telp', '$jk', '$username', '$password')");
        if ($query == 1) {
            $message = "Data Berhasil di tambahkan!";
            echo "<script type='text/javascript'>
            alert('$message');
            window.location.href = '../data-pegawai.php';
            </script>";
        } else {
            $message = "Data Gagal di tambahkan!";
            echo "<script type='text/javascript'>
            alert('$message');
            window.location.href = '../data-pegawai.php';
            </script>";
        }
    } else {
        $message = "UKURAN FILE TERLALU BESAR!";
        echo "<script type='text/javascript'>
            alert('$message');
            window.location.href = '../data-pegawai.php';
            </script>";
    }
} else {
    $message = "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
    die;
    echo "<script type='text/javascript'>
            alert('$message');
            window.location.href = '../data-pegawai.php';
            </script>";
}
