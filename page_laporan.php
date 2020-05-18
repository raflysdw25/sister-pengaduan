<?php 
    require 'assets/database/functions.php';
    /* Head */
    include('layouts/head.php');
?>
<body>
    <!-- Navigasi -->
    <?php include('layouts/navigation.php'); ?>
    <!-- Main Content -->
    <main>
        <div class="container">
            <section>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="semua-tab" data-toggle="tab" href="#semua" role="tab" aria-controls="semua" aria-selected="true">semua</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="laporan-saya-tab" data-toggle="tab" href="#laporan_saya" role="tab" aria-controls="laporan-saya" aria-selected="false">laporan-saya</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="semua-tab">...</div>
                    <div class="tab-pane fade" id="laporan-saya" role="tabpanel" aria-labelledby="laporan-saya-tab">...</div>
                </div>
            </section>
            <aside>

            </aside>
        </div>
    </main>
    <!-- Footer -->
    <?php include('layouts/footer.php'); ?>
    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>