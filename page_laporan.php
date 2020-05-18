<?php 
    require 'assets/database/functions.php';
    /* Head */
    include('layouts/head.php');
?>
<body>
    <!-- Navigasi -->
    <?php include('layouts/navigation.php'); ?>
    <!-- Main Content -->
    <main style="margin-bottom:30px;">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <!-- List Laporan -->
                    <section class="section-list-laporan">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="semua-tab" data-toggle="tab" href="#semua" role="tab" aria-controls="semua" aria-selected="true">Semua</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="laporan-saya-tab" data-toggle="tab" href="#laporan_saya" role="tab" aria-controls="laporan-saya" aria-selected="false">Laporan Saya</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="semua-tab">

                            </div>
                            <div class="tab-pane fade" id="laporan-saya" role="tabpanel" aria-labelledby="laporan-saya-tab">...</div>
                        </div>
                    </section>
                </div>
                <!-- List Laporan Aside -->
                <div class="col-4">
                    <aside>
                        <!--Card Profile -->
                        <div class="card card-profile shadow" style="width: 22rem;">
                            <img class="card-img-top" src="assets/img/cover.png" alt="Card image cap">
                            <div class="divider-profile row">
                                <div class="col-3">
                                    <img src="assets/img/members-2.png">
                                </div> 
                                <div class="col-9">
                                    <p style="font-size: 24px; font-weight: 600;">M. Rafly Sadewa</p>
                                    <span>
                                        <p>@username</p>
                                    </span>
                                </div> 
                            </div>
                            <div class="card-body body-number">
                                <div class="row">
                                    <div class="col text-center">
                                        <p>Terverifikasi</p>
                                        <p class="number-laporan"> 01 </p>
                                    </div>
                                    <div class="col text-center">
                                        <p>Diproses</p>
                                        <p class="number-laporan"> 01 </p>
                                    </div>
                                    <div class="col text-center">
                                        <p>Selesai</p>
                                        <p class="number-laporan"> 01 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button Tambah Laporan -->
                        <div>
                            <a href="tambah_pengaduan.php" class="btn btn-cta" style="width:22rem;"><i class="fas fa-plus">   Tambah Laporan Pengaduan</i></a>
                        </div>
                        <!-- Kategori Populer -->
                        <div class="card" style="margin-top: 20px;">
                            <h5 style="margin-left: 18px; margin-top: 15px;">Kategori Populer</h5>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>Kesehatan</td>
                                        <td>129.343</td>
                                        </tr>
                                        <tr>
                                        <td>Ekonomi</td>
                                        <td>15433</td>
                                        </tr>
                                        <tr>
                                        <td>Infrastruktur</td>
                                        <td>10.232</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" style="text-decoration: none; font-size: 14px;">Lihat kategori lainnya</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php include('layouts/footer.php'); ?>
    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>