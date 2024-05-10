<?php
require "../../../../koneksi.php";

session_start();

if (!(isset($_SESSION['role']) && $_SESSION['role'] == "admin")) {
  header('Location: ../../public_html/views/auth/pages/login_admin.php');
  exit();
}

$current_page = "daftar_kamar";

// Query SQL untuk mengambil data kamar
$sql = "SELECT * FROM kamar";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Kamar | Dashboard Asrama Mahasiswa Universitas Mulawarman</title>

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
        <h2 class="fw-bold">Daftar Kamar</h2>
        <h5>Kelola kamar yang ada pada asrama</h5>
      </div>

      <div class="mt-4">
        <a href='tambah_kamar.php' class='btn btn-success fw-semibold mb-2'><i class="fa-solid fa-plus me-1"></i> Tambah Kamar</a>

        <table class="table table-sm table-striped">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Lantai</th>
              <th scope="col">No. Kamar</th>
              <th scope="col">Harga per Bulan</th>
              <th scope="col">Status Kamar</th>
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
                  <th scope="row"><?php echo $no++; ?></th>
                  <td><?php echo $row['lantai']; ?></td>
                  <td><?php echo $row['no_kamar']; ?></td>
                  <td>Rp<?php echo number_format($row['harga'], 0, ',', '.'); ?></td>
                  <td>
                    <?php
                    if ($row['status'] == "belum_berpenghuni") {
                    ?>
                      <span class="badge text-bg-danger">Belum berpenghuni</span>
                    <?php
                    };
                    ?>

                    <?php
                    if ($row['status'] == "sudah_berpenghuni") {
                    ?>
                      <span class="badge text-bg-success">Sudah berpenghuni</span>
                    <?php
                    };
                    ?>
                  </td>
                  <td>
                    <!-- <a href='' class='btn btn-sm btn-success '><i class="fa-solid fa-user-plus"></i></a> -->
                    <a href='edit_kamar.php?id=<?php echo $row["id"] ?>' class='btn btn-sm btn-primary'><i class='fa-solid fa-pen'></i></a>
                    <!-- <a href='' class='btn btn-sm btn-danger'><i class='fa-solid fa-trash'></i></a> -->
                  </td>
                </tr>
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