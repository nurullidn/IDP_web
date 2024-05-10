<?php
require "../../koneksi.php";

session_start();

if (isset($_SESSION["role"]) && $_SESSION['role'] == "mahasiswa") {
  header('Location: ../../mahasiswa/pages/beranda.php');
} else if (isset($_SESSION["role"]) && $_SESSION['role'] == "admin") {
  header('Location: ../../admin/pages/beranda.php');
}

if (isset($_POST["login"]) && $_POST["role"] == "mahasiswa") {
	$nim = $_POST["username"];
	$pass = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");

	if (mysqli_num_rows($result) == 1) {
		$item = mysqli_fetch_assoc($result);

		if (password_verify($pass, $item['password'])) {
			$_SESSION['nama_lengkap'] = $item['nama_lengkap'];
			$_SESSION['nim'] = $item['nim'];
			$_SESSION['role'] = 'mahasiswa';
      header("Location: ../../public_html/views/mahasiswa/pages/beranda.php");
		} else {
			$_SESSION['error'] = 'login_failed';
      header("Location: ../../public_html/views/auth/pages/login.php");
		}
	} else {
    header("Location: ../../public_html/views/auth/pages/login.php");
	}
}

if (isset($_POST["login"]) && $_POST["role"] == "admin") {
	$username = $_POST["username"];
	$pass = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");

	if (mysqli_num_rows($result) == 1) {
		$item = mysqli_fetch_assoc($result);

		if (password_verify($pass, $item['password'])) {
			$_SESSION['username'] = $item['username'];
			$_SESSION['role'] = 'admin';
      header("Location: ../../public_html/views/admin/pages/beranda.php");
		} else {
			$_SESSION['error'] = 'login_failed';
      header("Location: ../../public_html/views/auth/pages/login_admin.php");
		}
	} else {
		$_SESSION['error'] = 'login_failed';
    header("Location: ../../public_html/views/auth/pages/login_admin.php");
	}
}
