<?php
	session_start();
	if (isset($_SESSION['login'])) {
		include 'koneksi.php';
		
		$id = isset($_GET['ID']) ? $_GET['ID'] : '';
		
		if (!empty($id)) {
			mysqli_query($connect, "
			DELETE FROM santri
			WHERE id = '$id'
			");
			
			header("location:../santri.php");
		} else {
			echo "ID kosong";
		}
	} else {
		echo "Please <a href='../index.php'>login</a> first.";
	}		
?>