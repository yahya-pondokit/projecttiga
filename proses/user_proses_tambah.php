<?php
	session_start();
	if (isset($_SESSION['login'])) {
		include 'koneksi.php';
		
		$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		
		if (!empty($nama) && !empty($email) && !empty($password)) {
			mysqli_query($connect, "INSERT INTO user VALUES (null, '$nama', '$email', '$password')");
			header("location:../user.php");
		} else {
			echo "Silahkan lengkapi data <a href='..user_tambah.php'>user</a>";
		}
	} else {
		echo "Please <a href='..index.php'>login</a> first.";
	}
?>