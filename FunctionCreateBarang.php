<?php
    include 'config.php';
    $sql ="INSERT INTO barang(ID_Barang,Nama_Barang,Harga_Barang,Jenis_Barang,Jumlah_Barang) VALUES ('".$_POST["ID_Barang"]."','".$_POST["Nama_Barang"]."','".$_POST["Harga_Barang"]."','".$_POST["Jenis_Barang"]."','".$_POST["Jumlah_Barang"]."')";
    if($conn->query($sql)===TRUE){
        $message ="Berhasil menambah barang";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: MenuBarang.php");
    }
    else{
        $message="Gagal menambah barang";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: MenuBarang.php');
    }
    $conn->close();
?>
