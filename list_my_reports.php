<?php 
    $myreports = query("SELECT p.*, up.nama, up.username FROM pengaduan p JOIN user_profile up ON (p.up_id = up.up_id) WHERE p.up_id = $user_id");
    $count_data = count($myreports);

    foreach($myreports as $myreport): 
        if($myreport["status"] == "Selesai"){
            $badge = 'done';
            $image = 'selesai.png';
        }else if($myreport["status"] == "Tindak Lanjut"){
            $badge = 'action';
            $image = 'followup-orange.png';
        }else if($myreport["status"] == "Verifikasi"){
            $badge = 'verify';
            $image = 'verif-red.png';
        }   
?>
<div class="row list-content-laporan">
    <div class="col-2">
        <img src="assets/img/members-2.png" style="width: 55px;" class="rounded mx-auto d-block">
    </div>
    <div class="col-10">
        <div class="row justify-content-start">
            <div class="col nama-laporan">
                <span><?= $myreport["nama"]?></span>
            </div>
            <div class="col tgl-laporan text-right">
                <span><?= $myreport["created_at"]?></span>
            </div>
            <div class="col-12 kategori-laporan">
                <small class="badge bg-secondary text-white"><?= $myreport["kategori"]?></small>
            </div>
            <div class="col-9 judul-laporan">
                <span><?= $myreport["judul"]?></span>
            </div>
            <div class="col-3 status-laporan text-right">
                <small class="badge <?= $badge?>">
                    <img src="assets/img/<?= $image?>" alt="">
                    <?= $myreport["status"]?>
                </small>
            </div>
            <div class="col-12 isi-laporan">
                <span><?= $myreport["deskripsi"]?></span>
            </div>
            <div class="col-12 jenis-laporan" style="">
                <span><i class="far fa-calendar-alt"></i>   <?= $myreport["tgl_kejadian"]?> | <?= $myreport["jenis"]?></span>
            </div>
            <div class="col-7 komentar-laporan" style="padding-top: 15px;">
                <span>
                    <img src="assets/img/comment.png" style="width: 20px;">
                    Komentar 0
                </span>
                <span>
                <img src="assets/img/dukung.png" style="width: 20px;">
                    Dukung 0
                </span>
                <span>
                    <img src="assets/img/share.png" style="width: 16px;">
                        Bagikan
                </span>
            </div>
        </div> 
    </div>
</div>
<?php endforeach; ?>