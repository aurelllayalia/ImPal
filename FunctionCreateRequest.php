<?php
    include 'config.php';
    $sql ="INSERT INTO request(ID_Request,Keterangan,Konfirmasi,ID_Supplier,ID_Barang) VALUES ('".$_POST["ID_Request"]."','".$_POST["Keterangan"]."','".$_POST["Konfirmasi"]."','".$_POST["ID_Supplier"]."','".$_POST["ID_Barang"]."')";
    if($conn->query($sql)===TRUE){
        $message ="Berhasil menambah request";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: MenuRequestSupplier.php");
    }
    else{
        $message="Gagal menambah request";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: MenuRequestSupplier.php');
    }
    $conn->close();
?>