<?php
require_once "../../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $jumlah_pembayaran = $_POST["jumlah_pembayaran"];
  $status_pembayaran = $_POST["status_pembayaran"];
  $nim = $_POST["nim"]; 

  $query = "UPDATE penghuni SET jml_bayar = $jumlah_pembayaran, status = '$status_pembayaran' WHERE nim = '$nim'";

  if (mysqli_query($koneksi, $query)) {
    header("location: ../../public_html/views/admin/pages/daftar_penghuni.php");
    exit();
  } else {
    header("location: ../../public_html/views/admin/pages/daftar_penghuni.php");
    exit();  
  }

} else {
  header("location: ../../public_html/views/admin/pages/daftar_penghuni.php");
  exit();
}
