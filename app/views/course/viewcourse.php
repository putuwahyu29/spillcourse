<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Materi | SpillCourse</title>
  <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
  <link rel="shortcut icon" href="<?= BASEURL ?>/img/favicon.ico">
</head>

<body>
  <?php
  $course = $data['course']
  ?>

  <header>
    <div class="container headerContainer">
      <div class="headerLeft">
        <h1><?= $course['name'] ?></h1>
        <p><?= $course['content']; ?></p>
      </div>
      <div class="headerRight">
        <div class="headerRightImage">
          <img src="<?= BASEURL ?>/img/<?= $course['thumbnail'] ?>.jpg" alt="">
        </div>
      </div>
  </header>
</body>

</html>