<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/additem.css">
  <title>Dashboard | SpillCourse</title>
  <link rel="shortcut icon" href="<?= BASEURL ?>/img/favicon.ico">
</head>

<body>
  <div class="wrapper home-section">
    <h2>Buat Materi Baru</h2>
    <form name="addCourse" action="<?= BASEURL; ?>/admin/addcourseaction" method="post">
      <div class="input-box">
        <label for="">Judul Materi :</label>
        <input type="text" placeholder="Judul" name="name" required>
      </div>
      <div class="input-box">
        <label for="thumbnail">Jenis Materi :</label>
        <select name="thumbnail" id="thumbnail" name="thumbnail">
          <option selected value="" disabled>Pilih Jenis Materi</option>
          <option value="htmlCourse">HTML</option>
          <option value="cssCourse">CSS</option>
          <option value="jsCourse">Javascript</option>
          <option value="phpCourse">PHP</option>
          <option value="rCourse">R</option>
          <option value="pyCourse">Python</option>
          <option value="javaCourse">Java</option>
          <option value="cCourse">C</option>
          <option value="uiuxCourse">UI/UX</option>
        </select>
      </div>
      <div class="input-box">
        <label for="thumbnail">Pilih Kategori :</label>
        <select name="categories_id">
          <option selected value="" disabled>Pilih Kategori</option>
          <?php
          foreach ($data['categories'] as $categories) { ?>
            <option value="<?= $categories['id'] ?>"><?= $categories['name'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-box">
        <label for="">Deskripsi Materi</label>
        <input type="text" placeholder="Deskripsi" name="description" required>
      </div>
      <div class="inputlong-box">
        <label for="">Materi</label>
        <textarea class="noneresize" rows="10" name="content" required></textarea>
      </div>

      <div class="input-box button">
        <input type="Submit" value="Tambah Materi">
      </div>
    </form>
  </div>
</body>

</html>