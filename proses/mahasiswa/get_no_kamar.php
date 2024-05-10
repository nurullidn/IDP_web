<?php
require_once('../../koneksi.php');

$lantai = $_POST['lantai'];

$query = "SELECT no_kamar FROM kamar WHERE lantai = '$lantai' AND status = 'belum_berpenghuni'";
$result = mysqli_query($koneksi, $query);

$nomor_kamar = [];
while ($row = mysqli_fetch_assoc($result)) {
  $nomor_kamar[] = $row['no_kamar'];
}

echo json_encode($nomor_kamar);
