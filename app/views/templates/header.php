<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header</title>
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/header.css" />
</head>

<body>
  <nav>
    <div class="navContainer">
      <i class="bx bx-menu siderbarOpen"></i>
      <span class="logo navLogo"><a href="<?= BASEURL ?>">Spill Course</a></span>

      <div class="navMenu">
        <div class="logoToggle">
          <span class="logo"><a href="#">Spill Course</a></span>
          <i class="bx bx-x siderbarClose"></i>
        </div>

        <ul class="navLinks">
          <li><a href="<?= BASEURL ?>">Beranda</a></li>
          <li>
            <a href="<?= BASEURL ?>/course">Materi</a>
          </li>
          <li>
            <a href="<?= BASEURL ?>/form">Masuk</a>
          </li>
        </ul>
      </div>

      <div class="search">
        <div class="searchBox">
          <div class="searchToggle">
            <i class="bx bx-x cancel"></i>
            <i class="bx bx-search search"></i>
          </div>

          <div class="searchField">
            <input type="text" placeholder="Cari..." />
            <i class="bx bx-search"></i>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <script src="<?= BASEURL; ?>/js/header.js"></script>
</body>

</html>