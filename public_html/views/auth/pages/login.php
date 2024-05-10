<?php
session_start();

if (isset($_SESSION["role"]) && $_SESSION['role'] == "mahasiswa") {
  header('Location: ../../mahasiswa/pages/beranda.php');
} else if (isset($_SESSION["role"]) && $_SESSION['role'] == "admin") {
  header('Location: ../../admin/pages/beranda.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In | Asrama Mahasiswa Universitas Mulawarman</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../../../assets/css/main.css">
</head>

<body>
  <div class="contaier-fluid">
    <div class="d-flex">
      <!-- Form log in -->
      <div class="w-100 d-flex justify-content-center align-items-center bg-body-secondary" style="height: 100vh;">
        <div class="w-50 d-flex flex-column">
          <div class="d-flex align-items-center mb-4">
            <img src="https://si.ft.unmul.ac.id/image/unmul2.png" alt="" class="img-fluid me-4" style="height: 100px;">

            <h2 class="fw-bold m-0">
              Asrama Mahasiswa <br>
              Universitas Mulawarman
            </h2>
          </div>

          <hr class="border border-1 border-black opacity-50">

          <h4 class="fw-bold mt-4 mb-4">
            Log In untuk Mendaftar Asrama
          </h4>

          <form action="../../../../proses/auth/login.php" method="post">
            <div class="mb-3">
              <label for="username" class="form-label fw-semibold">NIM</label>
              <input type="text" name="username" class="form-control rounded-3 py-2 border-0" id="username" placeholder="Masukkan NIM Anda">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-semibold">Password</label>
              <input type="password" name="password" class="form-control rounded-3 py-2 border-0" id="password" placeholder="Masukkan password Anda">
            </div>

            <!-- <div class="mb-3">
              <label class="form-label fw-semibold">Login Sebagai:</label>
              <div class="d-flex">
                <div class="form-check me-3">
                  <input class="form-check-input" type="radio" name="role" id="admin" value="admin">
                  <label class="form-check-label" for="admin">
                    Admin
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="mahasiswa" value="mahasiswa" checked>
                  <label class="form-check-label" for="mahasiswa">
                    Mahasiswa
                  </label>
                </div>
              </div>
            </div> -->
            <input type="hidden" name="role" value="mahasiswa">

            <div class="d-flex justify-content-center">
              <button type="submit" name="login" class="btn text-white px-5 rounded-pill fw-semibold" style="background-color: var(--purple);">Masuk</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>