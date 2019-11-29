<?php
	include 'config.php';
	if (isset($_POST['edit'])) {
		ubah($conn);
	}
	if (isset($_POST['delete'])) {
		hapus($conn);
	}

    function ubah($conn){
    	$sql = "UPDATE barang SET Nama_Barang ='{$_POST['Nama_Barang']}',Harga_Barang = '{$_POST['Harga_Barang']}',Jenis_Barang ='{$_POST['Jenis_Barang']}',Jumlah_Barang='{$_POST['Jumlah_Barang']}' WHERE ID_Barang = '{$_POST['ID_Barang']}'";
        if ($conn->query($sql) === TRUE) {
		    header("Location: MenuBarang.php");
				die();
		}
		else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }

    function hapus($conn){
    	$sql = "DELETE FROM barang WHERE ID_Barang = '{$_POST['ID_Barang']}'";
        if ($conn->query($sql) === TRUE) {
		    header("Location: MenuBarang.php");
				die();
		}
		else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>
