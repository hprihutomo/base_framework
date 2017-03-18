<?php
    $host = "SERVER";
    $dbname = "dbsi";
    $user = "root";
    $pass = "Master24";
    // Konfigurasi database anda
    try {
        // Buat Object PDO baru dan simpan ke variable $db
        $db = new PDO('mysql:host=192.168.2.19;dbname='.$dbname, $user, $pass);
        //$db = new PDO("sqlsrv:Server=$host;Database=$dbname;", "$username", "$password");
        // Mengatur Error Mode di PDO untuk segera menampilkan exception ketika ada kesalahan
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception){
        die("Connection error: " . $exception->getMessage());
    }
?>
