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


    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 43vh;">
      <div style=" margin-inline: 12rem;">
        <div class="d-flex justify-content-between align-items-center">
          <div class="me-4" data-aos="fade-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63834.88630386319!2d117.08380915433266!3d-0.4764155691394397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f4cdc6e8231%3A0xd80d5a17175abf3c!2sAsrama%20Mahasiswa%20Universitas%20Mulawarman%20(ASMAUL)!5e0!3m2!1sen!2sid!4v1714015909619!5m2!1sen!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div data-aos="fade-left">
            <h2 class="fw-bold mb-4">
              Lokasi Asrama Mahasiswa <br>
              Universitas Mulawarman
            </h2>

            <div>
              <p class="fs-5 m-0">
                <i class="fa-solid fa-location-dot"></i> Jalan Sambaliung, no. A24, Kel. Sempaja Selatan, Kec. Samarinda Utara
              </p>
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
          atau <a href="" class="text-decoration-none">klik di sini</a> jika ingin menghubungi kami
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
              <p><i class="fas fa-home me-2"></i>@Unmul</p>
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