<?php
    session_start();
    include("koneksi.php");
    if(isset($_POST['daftar'])){
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
        $posisi = filter_input(INPUT_POST, 'posisi', FILTER_SANITIZE_STRING);

        $sql = "INSERT INTO user (username, password, nama, posisi) VALUES (:username, :password, :nama, :posisi)";
        $stmt = $db->prepare($sql);

        $params = array(
            ":username" => $username,
            ":password" => $password,
            ":nama" => $nama,
            ":posisi" => $posisi
        );
        
        $saved = $stmt->execute($params);
        if($saved) header("Location: Login.php");
    }
    else{
        $message = "Gagal Sign Up. Silahkan Sign Up Ulang";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: ; url=Signup.php');
    }
?>