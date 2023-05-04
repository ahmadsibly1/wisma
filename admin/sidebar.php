    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="../assets/dist/img/logorskd.svg" alt="Logo Wisma RSKD" class="brand-image img-circle elevation-3 bg-white" style="opacity: .8">
            <span class="brand-text font-weight-light">Administrator</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <?php
                    include '../config/koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nama_pegawai = 'Feby'");
                    $pegawai = mysqli_fetch_array($query);

                    ?>
                    <img src="../assets/file/<?= $pegawai['foto']; ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link <?php if ($title == 'Dashboard') {
                                                                    echo 'active';
                                                                } ?>">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="reservasi.php" class="nav-link <?php if ($title == 'Reservasi') {
                                                                    echo 'active';
                                                                } ?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Reservasi
                            </p>
                        </a>
                    </li>
                    </li>
                    <li class="nav-header">Master Data</li>
                    <li class="nav-item">
                        <a href="data-kamar.php" class="nav-link <?php if ($title == 'Data-Kamar') {
                                                                        echo 'active';
                                                                    } ?>">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Kamar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="data-tamu.php" class="nav-link <?php if ($title == 'Data-Tamu') {
                                                                    echo 'active';
                                                                } ?>">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Tamu
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="data-pegawai.php" class="nav-link <?php if ($title == 'Data-Pegawai') {
                                                                        echo 'active';
                                                                    } ?>">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Pegawai
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">RESERVASI</li>
                    <li class="nav-item">
                        <a href="checkin.php" class="nav-link <?php if ($title == 'Checkin') {
                                                                    echo 'active';
                                                                } ?>">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Check In
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="data-tamu.php" class="nav-link <?php if ($title == 'Data-Tamu') {
                                                                    echo 'active';
                                                                } ?>">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Check Out
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="data-pegawai.php" class="nav-link <?php if ($title == 'Data-Pegawai') {
                                                                        echo 'active';
                                                                    } ?>">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Tamu In House
                            </p>
                        </a>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>