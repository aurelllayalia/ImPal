<?php
	include 'config.php';
	if (isset($_POST['edit'])) {
		edt($conn);
	}
	if (isset($_POST['delete'])) {
		del($conn);
	}

    function edt($conn){
    	$sql = "UPDATE request SET Keterangan ='{$_POST['Keterangan']}',Konfirmasi = '{$_POST['Konfirmasi']}',ID_Supplier ='{$_POST['ID_Supplier']}',ID_Barang ='{$_POST['ID_Barang']}' WHERE ID_Request ='{$_POST['ID_Request']}'";
        if ($conn->query($sql) === TRUE) {
		    header("Location: MenuRequestSupplier.php");
			die();
		}
		else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

    function del($conn){
    	$sql = "DELETE FROM request WHERE ID_Request = '{$_POST['ID_Request']}'";
        if ($conn->query($sql) === TRUE) {
		    header("Location: MenuRequestSupplier.php");
			die();
		}
		else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
?>