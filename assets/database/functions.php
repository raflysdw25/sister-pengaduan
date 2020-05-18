<?php 

    // Membuat koneksi dengan database
    $conn = mysqli_connect("localhost", "root", "", "sister_pengaduan");

    // Function untuk Read Data
    function query($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah_user($data){
        global $conn;

        $username = htmlspecialchars($data["username"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);

        // Cek Username di database, kalo sama tidak bisa mendaftar
        $result = query("SELECT username FROM users WHERE username = '$username'");
        if ( count($result) > 0 ) {
            echo"
                <script> 
                    alert('Username sudah terdaftar');
                    document.location.href='register.php';
                </script>
            ";

            return;
        }

        // Hash password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $time = date('Y-m-d h:i:s');
        $query = "INSERT INTO users
                    VALUES 
                    ('', '$username', '$password', '$time')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function edit_profile($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $telephone = htmlspecialchars($data["telephone"]);
        $email = htmlspecialchars($data["email"]);
        $user_id = htmlspecialchars($data["user_id"]);
        $time = date('Y-m-d h:i:s');
        $query = "INSERT INTO user_profile 
                    VALUES ('','$nama', '$alamat', '$telephone', '$email', '$user_id', '$time',null)";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }



?>