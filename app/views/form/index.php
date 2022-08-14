<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Masuk | SpillCourse</title>
  <link rel="shortcut icon" href="<?= BASEURL ?>/img/favicon.ico">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/form.css" />
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <!-- Akhir Navbar -->
  <div class="container">
    <div class="forms">
      <!-- Formulir Masuk -->
      <div class="form login">
        <span class="title">Masuk</span>
        <div class="msg"></div>
        <form name="loginForm" action="<?= BASEURL; ?>/form/signin" method="post">
          <div class="inputField">
            <input type="email" placeholder="Email" id="email" name="email" required />
            <i class="bx bx-envelope"></i>
          </div>
          <div class="inputField">
            <input type="password" class="password" name="password" id="password" placeholder="Password" required />
            <i class="bx bx-show showHidePw"></i>
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="checkboxText">
            <div class="checkboxContent">
              <input type="checkbox" id="logCheck" />
              <label for="logCheck" class="text">Ingat Saya</label>
            </div>
            <a href="#" class="text">Lupa Password?</a>
          </div>
          <div class="inputField button">
            <input type="submit" value="Masuk" />
          </div>
        </form>
        <div class="login-signup">
          <span class="text">Belum punya akun? Ayo
            <a href="#" class="text signupLink">Daftar</a>
          </span>
        </div>
      </div>

      <!-- Formulir Pendaftaran -->
      <div class="form signup">
        <span class="title">Daftar</span>
        <div class="msg"></div>
        <form name="daftarForm" action="<?= BASEURL; ?>/form/signup" method="post">
          <div class="inputField">
            <input type="text" placeholder="Nama Lengkap" id="name" name="name" required />
            <i class="bx bx-user"></i>
          </div>
          <div class="inputField">
            <input type="email" placeholder="Alamat Email" id="email" name="email" required />
            <i class="bx bx-envelope"></i>
          </div>
          <div class="inputField">
            <input type="password" class="password" placeholder="Masukkan password baru" id="password" name="password" required />
            <i class="bx bx-show showHidePw"></i>
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="inputField">
            <input type="password" class="password" placeholder="Konfirmasi password baru" id="password2" name="password2" required />
            <i class="bx bx-show showHidePw"></i>
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="checkboxText">
            <div class="checkboxContent">
              <input type="checkbox" id="sigCheck" />
              <label for="sigCheck" class="text">Ingat Saya</label>
            </div>
            <a href="#" class="text">Lupa Password?</a>
          </div>
          <div class="inputField button">
            <input type="submit" value="Daftar" />
          </div>
        </form>
        <div class="login-signup">
          <span class="text">Sudah punya akun?
            <a href="#" class="text loginLink">Masuk sekarang</a>
          </span>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= BASEURL ?>/js/form.js"></script>
</body>

</html>