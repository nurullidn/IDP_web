<nav class="navbar navbar-expand-lg shadow" style="height: 7vh; background-color: var(--light-brown) !important;">
  <div class="container-fluid" style="margin-inline: 12rem;">
    <!-- TODO: Current page active php -->
    <div class="navbar-nav">
      <a class="navbar-brand text-white fw-bold" href="#">
        ASRAMA
      </a>

      <a class="nav-link fw-semibold text-white active" aria-current="page" href="beranda.php">Beranda</a>
      <a class="nav-link fw-semibold text-white" href="lokasi.php">Lokasi</a>
      <a class="nav-link fw-semibold text-white" href="beranda.php#fasilitas">Fasilitas</a>
      <a class="nav-link fw-semibold text-white" href="beranda.php#foto">Foto</a>
      <a class="nav-link fw-semibold text-white" href="daftar.php">Daftar</a>
      <a class="nav-link fw-semibold text-white" href="informasi_asrama.php">Informasi Asrama</a>
    </div>

    <div class="navbar-nav">
      <div class="my-auto">
        <div class="dropdown">
          <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i>
          </a>

          <ul class="dropdown-menu dropdown-menu-end">
            <?php
            if (isset($_SESSION["role"]) && $_SESSION["role"] == "mahasiswa") {
            ?>
              <li><a href="informasi_penghuni.php" class="dropdown-item"><?php echo $_SESSION["nama_lengkap"] ?></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item fw-semibold" href="../../../../proses/auth/logout.php"><i class="fa-solid fa-right-to-bracket me-1"></i> Log out</a></li>
            <?php
            } else {
            ?>
              <li><a class="dropdown-item fw-semibold" href="../../auth/pages/login.php"><i class="fa-solid fa-right-to-bracket me-1"></i> Mahasiswa</a></li>
              <li><a class="dropdown-item fw-semibold" href="../../auth/pages/login_admin.php"><i class="fa-solid fa-right-to-bracket me-1"></i> Admin</a></li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>