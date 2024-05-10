<?php
if (isset($_GET['id'])) {
  require "../../koneksi.php";

  $id = mysqli_real_escape_string($koneksi, $_GET['id']);

  $sql_select = "SELECT nim FROM penghuni WHERE nim = '$id'";
  $result_select = mysqli_query($koneksi, $sql_select);

  if ($result_select && mysqli_num_rows($result_select) > 0) {
    $row_select = mysqli_fetch_assoc($result_select);
    $nim = $row_select['nim'];

    $sql_update = "UPDATE kamar SET status = 'belum_berpenghuni', nim = NULL WHERE nim = '$nim'";
    mysqli_query($koneksi, $sql_update);

    $sql_delete = "DELETE FROM penghuni WHERE nim = '$id'";

    if (mysqli_query($koneksi, $sql_delete)) {
      header('Location: ../../public_html/views/admin/pages/daftar_penghuni.php');
      exit();
    } else {
      echo "Error: " . mysqli_error($koneksi);
    }
  } else {
    header('Location: ../../public_html/views/admin/pages/daftar_penghuni.php');
    exit();
  }

  mysqli_close($koneksi);
} else {
  header('Location: ../../public_html/views/admin/pages/daftar_penghuni.php');
  exit();
}
