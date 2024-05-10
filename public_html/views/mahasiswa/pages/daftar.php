<?php
session_start();

require_once('../../../../koneksi.php');

if (!(isset($_SESSION['role']) && $_SESSION['role'] == "mahasiswa")) {
  header('Location: ../../auth/pages/login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | Asrama Mahasiswa Universitas Mulawarman</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="../../../assets/css/main.css">
</head>

<body>
  <div class="contaier-fluid">
    <?php require "../partials/navbar.php"; ?>

    <div class="container-fluid d-flex flex-column justify-content-center" style="height: 93vh;">
      <div style="margin-inline: 12rem;">
        <div class="mb-4">
          <h1 class="fw-bold m-0" data-aos="fade-down">Daftar Asrama</h1>
          <h4 data-aos="fade-down">Masukkan data terkait untuk mendaftar ke asrama</h4>
        </div>



        <form action="../../../../proses/mahasiswa/daftar.php" method="POST" enctype="multipart/form-data">
          <div class="d-flex">
            <div class="mb-3 w-75 me-3" data-aos="fade-right">
              <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $_SESSION["nama_lengkap"] ?>" readonly>
            </div>
            <div class="mb-3 w-25 me-3" data-aos="fade-left">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $_SESSION["nim"] ?>" readonly>
            </div>
            <div class="mb-3 w-25 me-3" data-aos="fade-left">
              <label for="nik" class="form-label">NIK</label>
              <input type="text" class="form-control" id="nik" name="nik" required>
            </div>
          </div>

          <div class="d-flex">
            <div class="mb-3 w-75 me-3" data-aos="fade-right">
              <label for="alamat_asal" class="form-label">Alamat Asal</label>
              <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" required>
            </div>
            <div class="mb-3 w-25 me-3" data-aos="fade-left">
              <label for="no_telp" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="no_telp" name="no_telp" required>
            </div>
          </div>

          <div class="d-flex">
            <?php
            $query_lantai = "SELECT DISTINCT lantai FROM kamar";
            $result_lantai = mysqli_query($koneksi, $query_lantai);
            ?>

            <div class="mb-3 me-3 w-25" data-aos="fade-right">
              <label for="lantai" class="form-label">Lantai</label>
              <select class="form-select" name="lantai" id="lantai">
                <option selected>Pilih lantai</option>
                <?php
                while ($row_lantai = mysqli_fetch_assoc($result_lantai)) {
                  echo '<option value="' . $row_lantai['lantai'] . '">' . $row_lantai['lantai'] . '</option>';
                }
                ?>
              </select>
            </div>

            <div class="mb-3 me-3 w-25" data-aos="fade-right">
              <label for="no_kamar" class="form-label">Nomor Kamar</label>
              <select class="form-select" name="no_kamar" id="no_kamar" disabled>
                <option selected>Pilih nomor kamar</option>
              </select>
            </div>

            <div class="mb-3 w-25 me-3" data-aos="fade-left">
              <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
              <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" required>
            </div>

            <div class="mb-3 w-25 me-3" data-aos="fade-left">
              <label for="durasi_sewa" class="form-label">Durasi Sewa (bulan)</label>
              <input type="number" class="form-control" id="durasi_sewa" name="durasi_sewa" min="1" required>
            </div>

            <div class="mb-3 w-25 me-3" data-aos="fade-left">
              <label for="tgl_keluar" class="form-label">Tanggal Keluar</label>
              <input type="text" class="form-control bg-body-secondary border border-2" id="tgl_keluar" name="tgl_keluar" readonly>
            </div>
          </div>

          <button type="submit" class="btn border-0 mt-4 fw-bold text-white" style="background-color: var(--purple);" data-aos="fade-up">Daftar Asrama</button>
        </form>
      </div>
    </div>

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="background-color: var(--yellow) ;height: 50vh;">
      <div style=" margin-inline: 12rem;">
        <h1 class="fw-bold mb-4" data-aos="fade-right">
          Ingin bertanya terkait pendaftaran asrama?
        </h1>

        <h4 class="fw-semibold text-center mb-4" data-aos="fade-left">
          Hubungi kami melalui WhatsApp dengan mengeklik tombol di bawah ini
        </h4>

        <div class="d-grid gap-2 col-6 w-75 mx-auto" data-aos="fade-right">
          <a href="" class="btn fs-3 fw-bold border-0 rounded-5 text-white" type="button" style="background-color: var(--purple);">Klik di sini </a>
        </div>

      </div>
    </div>

    <footer class="text-center text-lg-start text-muted" style="height: 50vh;">
      <section class="border-bottom d-flex align-items-center" style="height: 42vh;">
        <div class="container text-center text-md-start mt-5">
          <div class="row">
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
              <h6 class="text-uppercase fw-bold mb-4">
                LIHAT
              </h6>
              <p>
                <a href="beranda.php#fasilitas" class="text-reset text-decoration-none">Fasilitas</a>
              </p>
              <p>
                <a href="beranda.php#foto" class="text-reset text-decoration-none">Foto</a>
              </p>
              <p>
                <a href="lokasi.php" class="text-reset text-decoration-none">Lokasi</a>
              </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto">
              <h6 class="text-uppercase fw-bold mb-4">
                LAINNYA
              </h6>
              <p>
                <a href="https://unmul.ac.id/" class="text-reset text-decoration-none">Universitas Mulawarman</a>
              </p>
              <p>
                <a href="https://ais.unmul.ac.id/" class="text-reset text-decoration-none">Akademik Information System</a>
              </p>
              <p>
                <a href="https://star.unmul.ac.id/" class="text-reset text-decoration-none">Sistem Aplikasi Belajar</a>
              </p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-md-0">
              <h6 class="text-uppercase fw-bold mb-4">KONTAK KAMI</h6>
              <p><i class="fas fa-home me-2"></i> Unmul</p>
              <p><i class="fas fa-envelope me-2"></i> humas@gmail.com</p>
              <p><i class="fas fa-phone me-2"></i> +(62) 541 - 741118</p>
            </div>

            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63834.88630386319!2d117.08380915433266!3d-0.4764155691394397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f4cdc6e8231%3A0xd80d5a17175abf3c!2sAsrama%20Mahasiswa%20Universitas%20Mulawarman%20(ASMAUL)!5e0!3m2!1sen!2sid!4v1714015909619!5m2!1sen!2sid" width="261px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="text-center p-3 m-0 text-white d-flex align-items-center justify-content-center" style="background-color: var(--light-brown); height: 8vh;">
        <p class="m-0">
          Copyright © 2024 <span class="fw-bold">Nurul</span>
        </p>
      </div>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

    AOS.init({
      duration: 750,
    })
  </script>
  <script>
    AOS.init({
      duration: 750,
    })
  </script>
  <script>
    document.getElementById("lantai").addEventListener("change", function() {
      var lantai = this.value;

      var selectNoKamar = document.getElementById("no_kamar");
      selectNoKamar.innerHTML = '<option selected>Pilih nomor kamar</option>';

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../../../../proses/mahasiswa/get_no_kamar.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          var response = JSON.parse(xhr.responseText);

          response.forEach(function(nokamar) {
            var option = document.createElement("option");
            option.text = nokamar;
            selectNoKamar.add(option);
          });

          selectNoKamar.disabled = false;
        }
      };
      xhr.send("lantai=" + lantai);
    });
  </script>
  <script>
    document.getElementById("tgl_masuk").addEventListener("change", function() {
      updateTanggalKeluar();
    });

    document.getElementById("durasi_sewa").addEventListener("change", function() {
      updateTanggalKeluar();
    });

    function updateTanggalKeluar() {
      var tgl_masuk = new Date(document.getElementById("tgl_masuk").value);
      var durasi_sewa = parseInt(document.getElementById("durasi_sewa").value);

      if (!isNaN(tgl_masuk.getTime()) && durasi_sewa > 0) {
        var tgl_keluar = new Date(tgl_masuk);
        tgl_keluar.setMonth(tgl_keluar.getMonth() + durasi_sewa);

        var formatted_tgl_keluar = tgl_keluar.getFullYear() + "-" + ('0' + (tgl_keluar.getMonth() + 1)).slice(-2) + "-" + ('0' + tgl_keluar.getDate()).slice(-2);

        document.getElementById("tgl_keluar").value = formatted_tgl_keluar;
      }
    }
  </script>
</body>

</html>