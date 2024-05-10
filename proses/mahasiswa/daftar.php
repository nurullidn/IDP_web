<?php
session_start();

require_once('../../koneksi.php');

if (!(isset($_SESSION['role']) && $_SESSION['role'] == "mahasiswa")) {
  header('Location: ../../auth/pages/login.php');
  exit();
}

if (isset($_POST['nama_lengkap'], $_POST['nim'], $_POST['nik'], $_POST['alamat_asal'], $_POST['no_telp'], $_POST['lantai'], $_POST['no_kamar'], $_POST['tgl_masuk'], $_POST['tgl_keluar'])) {
  $nama_lengkap = $_POST['nama_lengkap'];
  $nim = $_POST['nim'];
  $nik = $_POST['nik'];
  $alamat_asal = $_POST['alamat_asal'];
  $no_telp = $_POST['no_telp'];
  $lantai = $_POST['lantai'];
  $no_kamar = $_POST['no_kamar'];
  $tgl_masuk = $_POST['tgl_masuk'];
  $tgl_keluar = $_POST['tgl_keluar'];

  $query = "INSERT INTO penghuni (nim, nama, no_ktp, no_telp, alamat_asal, tgl_masuk, tgl_keluar) 
                VALUES ('$nim', '$nama_lengkap', '$nik', '$no_telp', '$alamat_asal', '$tgl_masuk', '$tgl_keluar')";

  $result = mysqli_query($koneksi, $query);

  if ($result) {
    $update_query = "UPDATE kamar SET status = 'sudah_berpenghuni', nim = '$nim' WHERE lantai = '$lantai' AND no_kamar = '$no_kamar'";
    mysqli_query($koneksi, $update_query);

    header('Location: ../../public_html/views/mahasiswa/pages/beranda.php');
    exit();
  } else {
    echo "Terjadi kesalahan saat melakukan pendaftaran.";
  }
} else {
  echo "Data tidak lengkap.";
}
