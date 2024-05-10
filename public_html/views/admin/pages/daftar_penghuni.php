<?php
require "../../../../koneksi.php";

session_start();

if (!(isset($_SESSION['role']) && $_SESSION['role'] == "admin")) {
  header('Location: ../../public_html/views/auth/pages/login_admin.php');
  exit();
}

$current_page = "daftar_penghuni";

$sql = "SELECT penghuni.*, kamar.no_kamar, kamar.lantai, kamar.harga FROM penghuni LEFT JOIN kamar ON penghuni.nim = kamar.nim";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Penghuni | Dashboard Asrama Mahasiswa Universitas Mulawarman</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="../../../assets/css/main.css">

  <style>
    .active {
      background-color: var(--purple) !important;
    }
  </style>
</head>

<body>
  <div class="container-fluid p-0 d-flex">
    <?php
    require "../partials/sidebar.php";
    ?>

    <main class="p-5 w-100" style="margin-left: 250px;">
      <div class="border-bottom border-black pb-4">
        <h2 class="fw-bold">Daftar Penghuni</h2>
        <h5>Kelola penghuni yang ada pada asrama</h5>
      </div>

      <div class="mt-4">
        <table class="table table-sm table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Kamar</th>
              <th scope="col">Nama</th>
              <th scope="col">Masa Huni</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <?php
            if (mysqli_num_rows($result) > 0) {
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                  <th scope="row">
                    <?php echo $no++; ?>
                  </th>
                  <td>
                    <?php echo $row['no_kamar']; ?>
                  </td>
                  <td>
                    <?php echo $row['nama']; ?>
                  </td>
                  <td>
                    <?php echo $row['tgl_masuk'] . " s.d. " . $row['tgl_keluar']; ?>
                  </td>
                  <td>
                    <?php
                    if ($row['status'] == "belum_bayar") {
                    ?>
                      <span class="badge text-bg-danger">Belum bayar</span>
                    <?php
                    } else if ($row['status'] == "sudah_bayar") {
                    ?>
                      <span class="badge text-bg-success">Sudah bayar</span>
                    <?php
                    }
                    ?>
                  </td>
                  <td>
                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo $row['nim']; ?>">
                      <i class="fa-solid fa-eye"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#paymentModal">
                      <i class="fa-solid fa-dollar-sign"></i>
                    </button>
                    <a href='../../../../proses/admin/hapus_penghuni.php?id=<?php echo $row["nim"] ?>' class='btn btn-sm btn-danger'><i class='fa-solid fa-trash'></i></a>

                    <!-- Modal Biodata -->
                    <div class="modal fade" id="detailModal<?php echo $row['nim']; ?>" tabindex="-1" aria-labelledby="detailModalLabel<?php echo $row['nim']; ?>" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabel<?php echo $row['nim']; ?>">Detail Penghuni</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col">
                                <table class="table">
                                  <tr>
                                    <td>Nama</td>
                                    <td><?php echo $row['nama']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>No. Telepon</td>
                                    <td><?php echo $row['no_telp']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>No. KTP</td>
                                    <td><?php echo $row['no_ktp']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Alamat Asal</td>
                                    <td><?php echo $row['alamat_asal']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Masa Huni</td>
                                    <td><?php echo $row['tgl_masuk'] . " s.d. " . $row['tgl_keluar']; ?></td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Pembayaran -->
                    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="paymentModalLabel">Pembayaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="../../../../proses/admin/edit_pembayaran.php" method="POST">
                              <input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>">

                              <?php
                              $tgl_masuk = new DateTime($row["tgl_masuk"]);
                              $tgl_keluar = new DateTime($row["tgl_keluar"]);
                              $durasi_sewa = $tgl_masuk->diff($tgl_keluar)->format('%m');

                              $jumlah_pembayaran = $durasi_sewa * $row["harga"];
                              ?>

                              <div class="mb-3">
                                <label for="harga_per_bulan" class="form-label">Harga per Bulan</label>
                                <input type="number" class="form-control" id="harga_per_bulan" name="harga_per_bulan" value="<?php echo $row["harga"]; ?>" disabled>
                              </div>
                              <div class="mb-3">
                                <label for="durasi_sewa" class="form-label">Durasi Sewa (bulan)</label>
                                <input type="number" class="form-control" id="durasi_sewa" name="durasi_sewa" value="<?php echo $durasi_sewa; ?>" disabled>
                              </div>
                              <div class="mb-3">
                                <label for="jumlah_pembayaran" class="form-label">Jumlah Pembayaran</label>
                                <input type="number" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" value="<?php echo $jumlah_pembayaran; ?>" required>
                              </div>
                              <div class="mb-3">
                                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                                <select class="form-select" id="status_pembayaran" name="status_pembayaran" required>
                                  <option value="belum_bayar">Belum Bayar</option>
                                  <option value="sudah_bayar">Sudah Bayar</option>
                                </select>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                  </td>
                </tr>
              <?php
              }
            } else {
              ?>
              <tr>
                <td colspan='7'>Tidak ada data yang tersedia.</td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

    AOS.init({
      duration: 750,
    })
  </script>
</body>

</html>