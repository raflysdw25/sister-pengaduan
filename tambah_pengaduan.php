<?php 
    require 'assets/database/functions.php';
    /* Head */
    include('layouts/head.php');
?>
<body>
    <!-- Navigasi -->
    <?php include('layouts/navigation.php'); ?>
    <!-- Main Content -->
    <main style="margin-bottom: 25px">
        <div class="container">
            <h2 class="text-center laporan-heading">Laporan Pengaduan dan Aspirasi</h2>
            <form>
                <div class="form-group">
                    <label for="judulPengaduan">Judul Laporan</label>
                    <input type="text" class="form-control" id="judulPengaduan" placeholder="Ketik judul laporan..." required>
                </div>
                <div class="form-group">
                    <label for="isiPengaduan">Isi Laporan</label>
                    <textarea class="form-control form-control-alternative" id="isiPengaduan" rows="3" placeholder="Ketik isi laporan..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="kategoriPengaduan">Jenis Laporan</label>
                    <select class="form-control">
                        <option selected>Pilih Kategori</option>
                        <option>Pengaduan</option>
                        <option>Aapirasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggalKejadian">Tanggal Kejadian</label>
                    <input class="form-control datepicker" id="tanggalKejadian" required>
                </div>
                <div class="form-group">
                    <label for="instansiPengaduan">Instansi Tujuan</label>
                    <input type="email" class="form-control" id="instansiPengaduan" placeholder="Ketik instansi tujuan..." required>
                </div>
                <div class="form-group">
                    <label for="kategoriPengaduan">Kategori</label>
                    <select class="form-control">
                        <option selected>Pilih Kategori</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-cta mb-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- Footer -->
    <?php include('layouts/footer.php'); ?>

    <script>
        $("#tanggalKejadian").datepicker({
            timepicker: true,
            datepicker: true,
            autoclose: true,
            format: 'dd/mm/yyyy'
        });
    </script>
    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>