<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Materi | SpillCourse</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="<?= BASEURL ?>/img/favicon.ico">
</head>

<body>
  <!-- Awal kursus -->
  <section class="courses">
    <h2>Semua Materi</h2>

    <div class="container coursesContainer">
      <!-- Awal foreach -->
      <?php
      foreach ($data['course'] as $course) { ?>
        <article class="course">
          <div class="courseImage">
            <img src="<?= BASEURL ?>/img/<?= $course['thumbnail'] ?>.jpg" alt="">
          </div>
          <div class="courseInfo">
            <h4><?= $course['name'] . '<br>'; ?></h4>
            <p><?= $course['description'] . '<br>'; ?></p>
            <a href="<?= BASEURL ?>/course/viewcourse/<?= $course['id'] ?>" class="btn btn-primary"> Lihat Materi</a>
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