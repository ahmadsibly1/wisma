<?php $title = "Checkin"; ?>
<?php $titlePage = "Checkin"; ?>
<?php include '../config/koneksi.php'; ?>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'function/rupiah.php'; ?>
<!-- Content -->

<!-- /.card-header -->

<div class="row">
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM kamar WHERE status = 'tersedia'");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= $data['no_kamar']; ?></h3>
                    <p><?= $data['tipe_kamar']; ?></p>
                    <h5><?= rupiah($data['harga']); ?></h5>
                </div>
                <div class="icon">
                    <i class="bi bi-houses"></i>
                </div>
                <a href="checkin-form.php?id=<?= $data['id_kamar']; ?>" class="small-box-footer">Checkin <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    <?php } ?>
</div>
<!-- End Content -->
<?php include 'footer.php'; ?>