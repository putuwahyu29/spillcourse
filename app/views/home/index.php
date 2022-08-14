<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | SpillCourse</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="<?= BASEURL ?>/img/favicon.ico">
</head>

<body>
  <!-- Awal Header -->
  <header>
    <div class="container headerContainer">
      <div class="headerLeft">
        <h1>Statistical Programming and Analytic Course </h1>
        <p>Welcome spiller!! As you see, Spill Course ini ditujukan buat kamu yang mau belajar tentang analisis statistik dengan memanfaatkan program code. Disini, spiller bisa menggunakan rstudio, python, stata, eview, dan .... Dari pada di spill banyak bakalan belajar apa aja, mending langsung eksekusi aja ya spiller!!!</p>
        <a href="<?= BASEURL ?>/form" class="btn btn-primary">Daftar Sekarang</a>
      </div>

      <div class="headerRight">
        <div class="headerRightImage">
          <img src="<?= BASEURL ?>/img/header.svg" alt="">
        </div>
      </div>
  </header>
  <!-- Akhir Header -->
  <!-- Awal section -->
  <section class="categories">
    <div class="container categoriesContainer">
      <div class="categoriesLeft">
        <h1>Kategori</h1>
        <p>Spiller course ini menyediakan beberapa kategori materi, di antaranya untuk desain web sampai data sains lhoo, termasuk untuk security-nya. Dari beberapa kategori ini, spiller difasilitasi dengan berbagai materi dari berbagai bahasa. Menarik kan? Get start it now, spiller!</p>
        <a href="<?= BASEURL ?>/course" class="btn">Lihat Selengkapnya</a>
      </div>

      <div class="categoriesRight">
        <?php
        foreach ($data['categories'] as $categories) { ?>
          <article class="category">
            <img src="<?= BASEURL ?>/img/<?= $categories['thumbnail'] ?>.png" alt="">
            <h4><?= $categories['name'] ?></h4>
          </article>
        <?php
        }
        ?>
        <!-- Akhir Foreach -->
      </div>
    </div>
  </section>
  <!-- Akhir section -->
  <!-- Awal kursus -->
  <section class="courses">
    <h2>Materi Populer</h2>
    <div class="container coursesContainer">
      <?php
      foreach ($data['course'] as $course) { ?>
        <article class="course">
          <div class="courseImage">
            <img src="<?= BASEURL ?>/img/<?= $course['thumbnail'] ?>.jpg" alt="">
          </div>
          <div class="courseInfo">
            <h4><?= $course['name'] . '<br>'; ?></h4>
            <p><?= $course['description'] . '<br>'; ?></p>
            <a href="<?= BASEURL ?>/course" class="btn btn-primary">Lihat Selengkapnya</a>
          </div>
        </article>
      <?php
      }
      ?>
      <!-- Akhir Foreach -->

    </div>
  </section>
  <!-- Akhir kursus -->
  <?php
  ?>
</body>

</html>