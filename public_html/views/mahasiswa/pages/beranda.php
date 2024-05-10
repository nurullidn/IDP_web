<?php
session_start();
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
    <?php
    require "../partials/navbar.php";
    ?>


    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 93vh; background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../../../assets/img/beranda.png'); background-size: cover; background-position: center;">
      <div class="text-center text-white" style="margin-inline: 12rem;">
        <h1 class="fw-bold" data-aos="fade-down">Asrama Mahasiswa Universitas Mulawarman</h1>

        <p data-aos="fade-up">Asrama Universitas Mulawarman (Unmul) merupakan fasilitas perumahan yang disediakan oleh universitas untuk mendukung kebutuhan akomodasi mahasiswa. Terletak di dalam lingkungan kampus yang nyaman dan aman, asrama Unmul menyediakan tempat tinggal bagi mahasiswa yang membutuhkan akses yang mudah ke berbagai fasilitas pendidikan dan ekstrakurikuler yang ditawarkan oleh universitas.</p>
      </div>
    </div>

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" id="fasilitas" style="height: 100vh; background-color: var(--yellow);">
      <div style=" margin-inline: 12rem;">
        <div class="mb-5">
          <h1 class="fw-bold" data-aos="fade-right">
            Fasilitas Asrama
          </h1>

          <h4 data-aos="fade-right">
            Dapatkan fasilitas terbaik dari kami
          </h4>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <div class="card-body d-flex justify-content-center align-items-center">
                <img src="../../../assets/icons/security.png" class="img-fluid" alt="" style="height: 100px;">
              </div>
              <div class="card-body d-flex justify-content-center align-items-center">
                <h5 class="card-title m-0">Keamanan 24 jam</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <div class="card-body d-flex justify-content-center align-items-center">
                <img src="../../../assets/icons/air.png" class="img-fluid" alt="" style="height: 100px;">
              </div>
              <div class="card-body d-flex justify-content-center align-items-center">
                <h5 class="card-title m-0">Air bersih</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <div class="card-body d-flex justify-content-center align-items-center">
                <img src="../../../assets/icons/kasur.jpg" class="img-fluid" alt="" style="height: 100px;">
              </div>
              <div class="card-body d-flex justify-content-center align-items-center">
                <h5 class="card-title m-0">Kasur</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <div class="card-body d-flex justify-content-center align-items-center">
                <img src="../../../assets/icons/kipas.png" class="img-fluid" alt="" style="height: 100px;">
              </div>
              <div class="card-body d-flex justify-content-center align-items-center">
                <h5 class="card-title m-0">Kipas Angin</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <div class="card-body d-flex justify-content-center align-items-center">
                <img src="../../../assets/icons/mesincuci.jpg" class="img-fluid" alt="" style="height: 100px;">
              </div>
              <div class="card-body d-flex justify-content-center align-items-center">
                <h5 class="card-title m-0">Laundry</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <div class="card-body d-flex justify-content-center align-items-center">
                <img src="../../../assets/icons/wifi.png" class="img-fluid" alt="" style="height: 100px;">
              </div>
              <div class="card-body d-flex justify-content-center align-items-center">
                <h5 class="card-title m-0">Free Wifi</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <div class="card-body d-flex justify-content-center align-items-center">
                <img src="../../../assets/icons/catering.png" class="img-fluid" alt="" style="height: 100px;">
              </div>
              <div class="card-body d-flex justify-content-center align-items-center">
                <h5 class="card-title m-0">Catering</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <div class="card-body d-flex justify-content-center align-items-center">
                <img src="../../../assets/icons/cleaning service.png" class="img-fluid" alt="" style="height: 100px;">
              </div>
              <div class="card-body d-flex justify-content-center align-items-center">
                <h5 class="card-title m-0">Kebersihan</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" id="foto" style="height: 100vh;">
      <div style=" margin-inline: 12rem;">
        <div class="mb-5 text-end">
          <h1 class="fw-bold" data-aos="fade-left">
            Foto Asrama
          </h1>

          <h4 data-aos="fade-left">
          Ruang yang tersedia di asrama 
          </h4>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <img src="../../../assets/icons/kamar.png" class="card-img-top" alt="...">
              <div class="card-footer">
                <p class="text-body-secondary text-center fw-semibold fs-6 m-0">Kamar</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow border-0" data-aos="fade-up">
              <img src="../../../assets/icons/ruangmakan.jpg" class="card-img-top" alt="...">
              <div class="card-footer">
                <p class="text-body-secondary text-center fw-semibold fs-6 m-0">Ruang Makan</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow border-0" data-aos="fade-up">
              <img src="../../../assets/icons/kamarmandi.png" class="card-img-top" alt="...">
              <div class="card-footer">
                <p class="text-body-secondary text-center fw-semibold fs-6 m-0">Kamar Mandi</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-0 shadow" data-aos="fade-up">
              <img src="../../../assets/icons/ruangbelajar.jpg" class="card-img-top" alt="...">
              <div class="card-footer">
                <p class="text-body-secondary text-center fw-semibold fs-6 m-0">Ruang Belajar</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow border-0" data-aos="fade-up">
              <img src="../../../assets/icons/dapur.jpg" class="card-img-top" alt="...">
              <div class="card-footer">
                <p class="text-body-secondary text-center fw-semibold fs-6 m-0">Dapur </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow border-0" data-aos="fade-up">
              <img src="../../../assets/icons/ruangtamu.jpg" class="card-img-top" alt="...">
              <div class="card-footer">
                <p class="text-body-secondary text-center fw-semibold fs-6 m-0">Ruang tamu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="background-color: var(--yellow) ;height: 50vh;">
      <div style=" margin-inline: 12rem;">
        <h1 class="fw-bold mb-4" data-aos="fade-right">
          Tertarik untuk tinggal di Asrama kami?
        </h1>

        <div class="d-grid gap-2 col-6 w-75 mx-auto mb-4" data-aos="fade-left">
          <a href="daftar.php" class="btn fs-3 fw-bold border-0 rounded-5 text-white" type="button" style="background-color: var(--purple);">Klik di sini </a>
        </div>

        <h4 class="fw-semibold text-center" data-aos="fade-right">
          atau <a href="https://wa.me/6282286876187" class="text-decoration-none">klik di sini</a> jika ingin menghubungi kami
        </h4>
      </div>
    </div>

    <!-- TODO: Pindah ke partials pakai include php -->
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
</body>

</html>