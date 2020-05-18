<?php
    // Buat Koneksi
    $conn = mysqli_connect('localhost', 'root', '', 'sister_pengaduan');

    //Read Data
    function query($query){
        global $conn;

        $rows = [];
        $result = mysqli_query($conn,$query);

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function user_login($data){
        global $conn;

        if(!isset($_SESSION)){
            session_start();
        }

        $username = $data["uName"];
        $password = $data["password"];

        $query = "SELECT * FROM user_profile WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        var_dump($result);
        
        //cek username
        if(mysqli_num_rows($result) === 1 ) {

            //cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                $_SESSION["login"] = true;
                $_SESSION["user_id"] = $row["up_id"];
                header("location:page_laporan.php");
                exit;
            }

        }

        $error = true;
        return $error;
    }

    function user_register($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $email = htmlspecialchars($data["email"]);
        $telephone = htmlspecialchars($data["telephone"]);
        $username = htmlspecialchars($data["uName"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);

        // Cek Username di database, kalo sama tidak bisa mendaftar
        $result = query("SELECT username FROM user_profile WHERE username = '$username'");
        if ( count($result) > 0 ) {
            echo"
                <script> 
                    alert('Username sudah terdaftar');
                    document.location.href='tambah_user.php';
                </script>
            ";

            return false;
        }

        // Hash password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $today = date("Y-m-d H:i:s");
        $query = "INSERT INTO user_profile
                    VALUES 
                    ('','$nama','$alamat', '$telephone','$email', '$username', '$password', '$today', null)";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    function add_laporan($data){
        global $conn;

        $user_id = $data["user_id"];

        $judul = htmlspecialchars($data["judulPengaduan"]);
        $isi = htmlspecialchars($data["isiPengaduan"]);
        $jenis = htmlspecialchars($data["jenisPengaduan"]);
        
        $tanggal = strtotime($data["tanggalKejadian"]);
        if( $tanggal ){
            $tgl = date('Y-m-d', $tanggal);
        }

        $instansi = htmlspecialchars($data["instansiPengaduan"]);
        $kategori = htmlspecialchars($data["kategoriPengaduan"]);

        $today = date("Y-m-d H:i:s");
        $query = "INSERT INTO pengaduan
                    VALUES 
                    ('', '$user_id', '$judul', '$kategori', 'Verifikasi', '$jenis', '$isi', '$instansi', '$tgl', '$today')";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }