<?php
	include 'config.php';
	if (isset($_POST['edit'])) {
		edt($conn);
	}
	if (isset($_POST['delete'])) {
		del($conn);
	}

    function edt($conn){
    	$sql = "UPDATE supplier SET ID_Supplier ='{$_POST['ID_Supplier']}',User_Supplier = '{$_POST['User_Supplier']}',Pass_Supplier ='{$_POST['Pass_Supplier']}',Nama_Supplier ='{$_POST['Nama_Supplier']}',Email_Supplier ='{$_POST['Email_Supplier']}' WHERE ID_Supplier ='{$_POST['ID_Supplier']}'";
        if ($conn->query($sql) === TRUE) {
		    header("Location: MenuStaff.php");
			die();
		}
		else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

    function del($conn){
    	$sql = "DELETE FROM supplier WHERE ID_Supplier = '{$_POST['ID_Supplier']}'";
        if ($conn->query($sql) === TRUE) {
		    header("Location: MenuStaff.php");
			die();
		}
		else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
?>