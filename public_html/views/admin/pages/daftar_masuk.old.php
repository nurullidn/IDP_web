<?php
require "../../../../koneksi.php";

session_start();

if (!(isset($_SESSION['role']) && $_SESSION['role'] == "admin")) {
  header('Location: ../../public_html/views/auth/pages/login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Masuk | Dashboard Asrama Mahasiswa Universitas Mulawarman</title>

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
  <!-- Sidebar -->
  <div class="container-fluid p-0 d-flex">
    <div class="d-flex flex-column p-3 me-3" style="width: 280px; height: 100vh; background-color: var(--light-brown);">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="https://si.ft.unmul.ac.id/image/unmul2.png" class="me-2" style="height: 32px;" alt="">
        <span class="fs-4 fw-semibold">Dashboard</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="beranda.php" class="nav-link text-white">
            <i class="fa-solid fa-house me-2"></i>
            Beranda
          </a>
        </li>
        <li>
          <a href="daftar_masuk.php" class="nav-link text-white active" aria-current="page">
            <i class="fa-solid fa-inbox me-2"></i>
            Daftar Masuk
          </a>
        </li>
        <!-- <li>
          <a href="foto.php" class="nav-link text-white">
            <i class="fa-solid fa-images me-2"></i>
            Foto
          </a>
        </li> -->
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user ms-1 me-2"></i>
          <strong>Admin</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="../../../../proses/auth/logout.php">Log out</a></li>
        </ul>
      </div>
    </div>

    <div class="m-4 w-100">
      <div class="mb-4">
        <h2 class="fw-bold">Daftar Masuk</h2>
        <h5>Berikut mahasiswa yang mendaftar ke asrama dan menunggu proses</h5>

        <hr class="text-black opacity-100">
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">KTP</th>
              <th scope="col">KK</th>
              <th scope="col">KTM</th>
              <th scope="col">SAK</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM pengajuan_kamar";
            $result = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <tr>
                  <td>
                    <?php echo $row["nama"] ?>
                  </td>
                  <td>
                    <?php echo $row["nim"] ?>
                  </td>
                  <td>
                    <button type="button" class="btn border-0 btn-sm text-white fw-semibold" style="background-color: var(--purple);" data-bs-toggle="modal" data-bs-target="#ktpModal<?php echo $row["id"] ?>">
                      Lihat
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn border-0 btn-sm text-white fw-semibold" style="background-color: var(--purple);" data-bs-toggle="modal" data-bs-target="#kkModal<?php echo $row["id"] ?>">
                      Lihat
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn border-0 btn-sm text-white fw-semibold" style="background-color: var(--purple);" data-bs-toggle="modal" data-bs-target="#ktmModal<?php echo $row["id"] ?>">
                      Lihat
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn border-0 btn-sm text-white fw-semibold" style="background-color: var(--purple);" data-bs-toggle="modal" data-bs-target="#suratAktifModal<?php echo $row["id"] ?>">
                      Lihat
                    </button>
                  </td>
                  <td>
                    <form action="../../../../proses/admin/ubah_status.php" method="POST">
                      <div class="d-flex">
                        <select class="form-select form-select-sm me-2" name="status">
                          <option value="Diproses" <?php if ($row["status"] == "Diproses") echo "selected"; ?>>Diproses</option>
                          <option value="Disetujui" <?php if ($row["status"] == "Disetujui") echo "selected"; ?>>Disetujui</option>
                          <option value="Ditolak" <?php if ($row["status"] == "Ditolak") echo "selected"; ?>>Ditolak</option>
                        </select>

                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                        <button type="submit" class="btn btn-primary btn-sm fw-semibold">Ubah</button>
                      </div>
                    </form>
                  </td>
                </tr>

                <?php
                date_default_timezone_set('Asia/Makassar');
                $date_time_string = $row["created_at"];
                $timestamp = strtotime($date_time_string);
                $formatted_date_time = date('U', $timestamp);
                ?>

                <!-- Modal KTP -->
                <div class="modal fade" id="ktpModal<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="ktpModalLabel<?php echo $row["id"] ?>" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ktpModalLabel<?php echo $row["id"] ?>">Kartu Tanda Penduduk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="../../../storage/<?php echo $row["nim"] ?>_<?php echo $formatted_date_time ?>/<?php echo $row["ktp"] ?>" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal KK -->
                <div class="modal fade" id="kkModal<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="kkModalLabel<?php echo $row["id"] ?>" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="kkModalLabel<?php echo $row["id"] ?>">Kartu Keluarga</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="../../../storage/<?php echo $row["nim"] ?>_<?php echo $formatted_date_time ?>/<?php echo $row["kk"] ?>" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal KTM -->
                <div class="modal fade" id="ktmModal<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="ktmModalLabel<?php echo $row["id"] ?>" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ktmModalLabel<?php echo $row["id"] ?>">Kartu Tanda Mahasiswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="../../../storage/<?php echo $row["nim"] ?>_<?php echo $formatted_date_time ?>/<?php echo $row["ktm"] ?>" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal Surat Aktif Kuliah -->
                <div class="modal fade" id="suratAktifModal<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="suratAktifModalLabel<?php echo $row["id"] ?>" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="suratAktifModalLabel<?php echo $row["id"] ?>">Surat Aktif Kuliah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="../../../storage/<?php echo $row["nim"] ?>_<?php echo $formatted_date_time ?>/<?php echo $row["surat_mhs_aktif"] ?>" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>
                </div>

              <?php
              }
            } else {
              ?>
              <tr>
                <td colspan='6'>Tidak ada data yang tersedia.</td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
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