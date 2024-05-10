<?php
require_once "../../koneksi.php";

session_start();

if (!(isset($_SESSION['role']) && $_SESSION['role'] == "admin")) {
  header('Location: ../../public_html/views/auth/pages/login.php');
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lantai = $_POST["lantai"];
  $no_kamar = $_POST["no_kamar"];
  $harga = $_POST["harga"];

  $cek_nomor_kamar = "SELECT * FROM kamar WHERE no_kamar = '$no_kamar'";
  $result = mysqli_query($koneksi, $cek_nomor_kamar);
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['error'] = 'nomor_kamar_exist';
    header("Location: ../../public_html/views/admin/pages/daftar_kamar.php");
    exit();
  }

  $sql = "INSERT INTO kamar (lantai, no_kamar, harga) VALUES ('$lantai', '$no_kamar', '$harga')";

  if (mysqli_query($koneksi, $sql)) {
    $_SESSION['success'] = 'kamar_added';
    header("Location: ../../public_html/views/admin/pages/daftar_kamar.php");
    exit();
  } else {
    $_SESSION['error'] = 'kamar_not_added';
  }
} else {
  $_SESSION['error'] = 'invalid_request';
}

header("Location: ../../public_html/views/admin/pages/daftar_kamar.php");
exit();
