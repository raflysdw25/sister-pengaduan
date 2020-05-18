<?php 
    require 'assets/database/functions.php';

    //Data Laporan
    $reports = query("SELECT p.*, up.nama, up.username FROM pengaduan p JOIN user_profile up ON (p.up_id = up.up_id)");
    $count_data = count($reports);

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
                <div class="col-7">
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
                                <?php include('list_reports.php') ?>   
                            </div>
                            <div class="tab-pane fade" id="laporan-saya" role="tabpanel" aria-labelledby="laporan-saya-tab">
                                <?php include('list_my_reports.php') ?> 
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-1"></div>
                <!-- List Laporan Aside -->
                <div class="col-4">
                    <aside>
                        <!--Card Profile -->
                        <div class="card card-profile shadow" style="width: 22rem;">
                            <img class="card-img-top" src="assets/img/cover.png" alt="Card image cap">
                            <?php 
                                $length = strlen($user_profile["nama"]);
                                if($length > 18){
                                    $font_size = "18px";
                                    $top = "-10%";
                                } else {
                                    $font_size = "24px";
                                    $top = "-12%";
                                }
                            ?>
                            <div class="divider-profile row" style="margin-top: <?= $top ?>;">
                                <div class="col-3">
                                    <img src="assets/img/members-2.png">
                                </div> 
                                <div class="col-9">
                                    <p style="font-size: <?= $font_size ?>; font-weight: 600;"><?= $user_profile["nama"] ?></p>
                                    <span>
                                        <p>@<?= $user_profile["username"] ?></p>
                                    </span>
                                </div> 
                            </div>
                            <?php 
                                //Laporan Terverifikasi
                                $verif = query("SELECT * FROM pengaduan WHERE up_id = $user_id AND status = 'Verifikasi'");
                                $count_verif = count($verif);

                                //Laporan Terverifikasi
                                $proses = query("SELECT * FROM pengaduan WHERE up_id = $user_id AND status = 'Tindak Lanjut'");
                                $count_proses = count($proses);

                                //Laporan Terverifikasi
                                $selesai = query("SELECT p.* FROM pengaduan p JOIN user_profile up ON (p.up_id = up.up_id) WHERE p.up_id = $user_id AND p.status = 'Selesai'");
                                $count_selesai = count($selesai);
                            ?>
                            <div class="card-body body-number">
                                <div class="row">
                                    <div class="col text-center">
                                        <p>Terverifikasi</p>
                                        <p class="number-laporan"> <?= $count_verif ?> </p>
                                    </div>
                                    <div class="col text-center">
                                        <p>Diproses</p>
                                        <p class="number-laporan"> <?= $count_proses ?> </p>
                                    </div>
                                    <div class="col text-center">
                                        <p>Selesai</p>
                                        <p class="number-laporan"> <?= $count_selesai ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button Tambah Laporan -->
                        <div>
                            <a href="tambah_pengaduan.php" class="btn btn-cta" style="width:22rem;"><i class="fas fa-plus">   Tambah Laporan</i></a>
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