<?php $title = "Reservasi"; ?>
<?php $titlePage = "Reservasi"; ?>
<?php include '../config/koneksi.php'; ?>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'function/rupiah.php'; ?>
<!-- Content -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Kamar Wisma</h3>
        <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Kamar</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg"">
                <div class=" modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kamar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="tambah/tambah-kamar.php" method="post">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="no_kamar" class="col-sm-4 col-form-label">No Kamar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="no_kamar" name="no_kamar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipe" class="col-sm-4 col-form-label">Tipe</label>
                            <div class="col-sm-8">
                                <select class="custom-select" name="tipe_kamar">
                                    <option selected>...pilih...</option>
                                    <option value="VIP (Single Bed)">VIP</option>
                                    <option value="Standar (Double Bed)">Standar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fasilitas" class="col-sm-4 col-form-label">Fasilitas</label>
                            <div class="col-sm-8">
                                <textarea type="text" class="form-control" id="fasilitas" name="fasilitas" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="harga" name="harga" required>
                                <small id="emailHelp" class="form-text text-muted">Tanpa Rp dan tanpa titik (cth: 175000)</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.card-header -->
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>No Kamar</th>
                <th>Tipe</th>
                <th>Failitas</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM kamar");
            $no = 0;
            while ($kamar = mysqli_fetch_array($query)) {
                $no++;
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $kamar['no_kamar']; ?></td>
                    <td><?= $kamar['tipe_kamar']; ?></td>
                    <td><?= $kamar['fasilitas']; ?></td>
                    <td><?= rupiah($kamar['harga']); ?></td>
                    <td><?= $kamar['status']; ?></td>
                    <td>
                        <!-- edit -->
                        <a href="edit-kamar.php?id_kamar=<?= $kamar['id_kamar']; ?>" class=" btn btn-success btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <!-- Hapus -->
                        <a href="hapus/hapus-kamar.php?id=<?= $kamar['id_kamar']; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menhapus data ini?')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>No Kamar</th>
                <th>Tipe</th>
                <th>Failitas</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
</div>
<!-- /.card-body -->
</div>
<!-- End Content -->
<?php include 'footer.php'; ?>