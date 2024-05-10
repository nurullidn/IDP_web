<?php
require "../../../../koneksi.php";

session_start();

if (!(isset($_SESSION['role']) && $_SESSION['role'] == "admin")) {
  header('Location: ../../public_html/views/auth/pages/login_admin.php');
  exit();
}

$current_page = "daftar_kamar";

if (isset($_GET['id'])) {
  $kamar_id = $_GET['id'];

  $query = "SELECT * FROM kamar WHERE id = $kamar_id";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) > 0) {
    $kamar = mysqli_fetch_assoc($result);
  } else {
    header("Location: daftar_kamar.php");
    exit();
  }
} else {
  header("Location: daftar_kamar.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Harga Kamar | Dashboard Asrama Mahasiswa Universitas Mulawarman</title>

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
        <h2 class="fw-bold">Ubah Harga Kamar</h2>
        <h5>Ubah Harga kamar yang ada pada asrama</h5>
      </div>

      <div class="mt-4">
        <form action="../../../../proses/admin/edit_kamar.php" method="POST">
          <input type="hidden" name="kamar_id" value="<?php echo $kamar['id']; ?>">
          <div class="d-flex">
            <div class="mb-3 w-25 me-3">
              <label for="lantai" class="form-label">Lantai</label>
              <input type="number" class="form-control" id="lantai" name="lantai" value="<?php echo $kamar['lantai']; ?>" disabled>
            </div>
            <div class="mb-3 w-25 me-3">
              <label for="no_kamar" class="form-label">Nomor Kamar</label>
              <input type="number" class="form-control" id="no_kamar" name="no_kamar" value="<?php echo $kamar['no_kamar']; ?>" disabled>
            </div>
            <div class="mb-3 w-50">
              <label for="harga" class="form-label">Harga awal per Bulan</label>
              <input type="number" class="form-control" id="harga_awal" name="harga_awal" value="<?php echo $kamar['harga']; ?>" disabled>
            </div>
          </div>
          <div class="mb-3">
            <label for="harga_baru" class="form-label">Harga baru per Bulan</label>
            <input type="number" class="form-control" id="harga_baru" name="harga_baru" required>
          </div>
          <button type="submit" class="btn text-white fw-semibold" style="background-color: var(--purple)">Simpan Perubahan</button>
        </form>
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