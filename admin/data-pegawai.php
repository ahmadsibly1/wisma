<?php $title = "Data-Pegawai"; ?>
<?php $titlePage = "Data Pegawai"; ?>
<?php include '../config/koneksi.php'; ?>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'function/rupiah.php'; ?>
<!-- Content -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pegawai Wisma</h3>
        <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Pegawai</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg"">
                <div class=" modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="tambah/tambah-pegawai.php" method="post">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="nama_pegawai" class="col-sm-4 col-form-label">Nama Pegawai</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telp" class="col-sm-4 col-form-label">No HP</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="no_telp" name="no_telp" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <select class="custom-select" name="jk">
                                    <option selected>...pilih...</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto" class="col-sm-4 col-form-label">Foto</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" id="foto" name="foto" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password" required>
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
    <table id="pegawai" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Gender</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM pegawai");
            $no = 0;
            while ($pegawai = mysqli_fetch_array($query)) {
                $no++;
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $pegawai['nama_pegawai']; ?></td>
                    <td><?= $pegawai['alamat']; ?></td>
                    <td><?= $pegawai['no_telp']; ?></td>
                    <td><?= $pegawai['jk']; ?></td>
                    <td><?= $pegawai['foto']; ?></td>
                    <td>
                        <!-- edit -->
                        <a href="edit-pegawai.php?id_pegawai=<?= $pegawai['id_pegawai']; ?>" class=" btn btn-success btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <!-- Hapus -->
                        <a href="hapus/hapus-pegawai.php?id=<?= $pegawai['id_pegawai']; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menhapus data ini?')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>No Pegawai</th>
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