<?php include '../config/koneksi.php'; ?>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'head.php'; ?>

<?php
$id_kamar = $_GET['id_kamar'];
$query = mysqli_query($koneksi, "SELECT * FROM kamar WHERE id_kamar = '$id_kamar'");
$data = mysqli_fetch_array($query);
?>
<!-- Content -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Edit Data Kamar Wisma</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="update/update-kamar.php" method="post">
            <div class="form-group row">
                <label for="no_kamar" class="col-sm-4 col-form-label">No Kamar</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="no_kamar" name="no_kamar" value="<?= $data['no_kamar']; ?>" required>
                    <input type="text" class="form-control" name="id_kamar" value="<?= $id_kamar; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tipe" class="col-sm-4 col-form-label">Tipe</label>
                <div class="col-sm-8">
                    <select class="custom-select" name="tipe_kamar">
                        <option selected><?= $data['tipe_kamar']; ?></option>
                        <option value="VIP (Single Bed)">VIP (Single Bed)</option>
                        <option value="Standar (Double Bed)">Standar (Double Bed)</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="fasilitas" class="col-sm-4 col-form-label">Fasilitas</label>
                <div class="col-sm-8">
                    <textarea type="text" class="form-control" id="fasilitas" name="fasilitas" required><?= $data['fasilitas']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data['harga']; ?>" id="harga" name="harga" required>
                    <small id="emailHelp" class="form-text text-muted">Tanpa Rp dan tanpa titik (cth: 175000)</small>

                </div>
            </div>
            <div class="modal-footer">
                <a href="data-kamar.php" class="btn btn-secondary" data-dismiss="modal">Kembali</a>
                <button type="submit" class="btn btn-primary" name="update">Simpan</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- End Content -->
<?php include 'footer.php'; ?>