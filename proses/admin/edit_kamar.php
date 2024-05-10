<?php
require "../../koneksi.php";

session_start();

if (!(isset($_SESSION['role']) && $_SESSION['role'] == "admin")) {
  header('Location: ../../public_html/views/auth/pages/login.php');
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $kamar_id = $_POST["kamar_id"];
  $harga_baru = $_POST["harga_baru"];

  $sql = "UPDATE kamar SET harga = '$harga_baru' WHERE id = '$kamar_id'";

  if (mysqli_query($koneksi, $sql)) {
    $_SESSION['success'] = 'harga_updated';
    header("Location: ../../public_html/views/admin/pages/daftar_kamar.php");
    exit();
  } else {
    $_SESSION['error'] = 'harga_not_updated';
    header("Location: ../../public_html/views/admin/pages/daftar_kamar.php");
    exit();
  }
} else {
  header("Location: ../../public_html/views/admin/pages/daftar_kamar.php");
  exit();
}
