<?php $title = "Checkin"; ?>
<?php $titlePage = "Checkin Form"; ?>
<?php include '../config/koneksi.php'; ?>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'function/rupiah.php'; ?>
<!-- Content -->

<!-- /.card-header -->
<div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Tamu</label>
                    <select class="custom-select" name="">
                        <option selected>...pilih...</option>
                        <option value="VIP (Single Bed)">VIP</option>
                        <option value="Standar (Double Bed)">Standar</option>
                    </select>
                </div>
                <div class="form-group">
                    <p><a href="#">Klik disini</a> Jika nama yang dimaksud belum terdaftar pada buku tamu</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- End Content -->
<?php include 'footer.php'; ?>