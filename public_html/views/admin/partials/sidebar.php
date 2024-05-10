<div class="d-flex flex-column py-3 shadow px-4" style="position: fixed; top: 0; bottom: 0; left: 0; width: 250px; background-color: #f8f9fa; z-index: 1000; overflow-y: auto; padding-top: 20px;  background-color: var(--light-brown);">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <img src="https://si.ft.unmul.ac.id/image/unmul2.png" class="me-2" style="height: 32px;" alt="">
    <span class="fs-4 fw-semibold">Dashboard</span>
  </a>
  <hr>


  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="beranda.php" class="nav-link text-white <?php echo ($current_page == "beranda") ? 'active' : '' ?>">
        <i class="fa-solid fa-house me-2"></i>
        Beranda
      </a>
    </li>
    <li>
      <a href="daftar_kamar.php" class="nav-link text-white <?php echo ($current_page == "daftar_kamar") ? 'active' : '' ?>">
        <i class="fa-solid fa-inbox me-2"></i>
        Daftar Kamar
      </a>
    </li>
    <li>
      <a href="daftar_penghuni.php" class="nav-link text-white <?php echo ($current_page == "daftar_penghuni") ? 'active' : '' ?>">
        <i class="fa-solid fa-inbox me-2"></i>
        Daftar Penghunni
      </a>
    </li>
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