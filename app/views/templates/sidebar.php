<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/sidebar.css">
  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-menu'></i>
      <span class="logo_name">Spill Course</span>
    </div>
    <ul class="nav-links">
      <li>

      </li>
      <li>
        <a href="<?= BASEURL ?>/admin">
          <i class='bx bx-home'></i>
          <span class="link_name">Dashboard</span>
        </a>
      <li>
      <li>
        <a href="<?= BASEURL ?>/admin/alluser">
          <i class='bx bx-user'></i>
          <span class="link_name">Pengguna</span>
        </a>
      <li>
      <li>
        <a href="<?= BASEURL ?>/admin/allcourse">
          <i class='bx bxs-book'></i>
          <span class="link_name">Materi</span>
        </a>
      <li>
      <li>
        <a href="<?= BASEURL ?>/admin/allcategories">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Kategori</span>
        </a>
      <li>

        <div class="profile-details">
          <div class="profile-content">
          </div>
          <div class="name-job">
            <div class="profile_name">Agus Wahyu</div>
            <div class="job">Administrator</div>
          </div>
          <i class='bx bx-log-out'></i>
        </div>
      </li>
    </ul>
  </div>
  <script src="<?= BASEURL ?>/js/sidebar.js"></script>
</body>

</html>