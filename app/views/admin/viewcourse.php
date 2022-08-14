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
    <h2>Lihat Materi</h2>
    <form name="addCourse" action="">
      <input type="hidden" name="id" value="<?= $data['course']['id'] ?>" required>
      <div class="input-box">
        <label for="">Judul Materi :</label>
        <input type="text" placeholder="Judul" name="name" value="<?= $data['course']['name'] ?>" disabled>
      </div>
      <div class="input-box">
        <label for="thumbnail">Jenis Materi :</label>
        <select name="thumbnail" id="thumbnail" name="thumbnail" disabled>
          <option selected value="">Pilih Jenis Materi</option>
        </select>
      </div>
      <div class="input-box">
        <label for="thumbnail">Pilih Kategori :</label>
        <select name="categories_id" disabled>
          <option selected value="">Pilih Kategori</option>

        </select>
      </div>
      <div class="input-box">
        <label for="">Deskripsi Materi</label>
        <input type="text" placeholder="Deskripsi" name="description" value="<?= $data['course']['description'] ?>" disabled>
      </div>
      <div class="inputlong-box">
        <label for="">Materi</label>
        <textarea class="noneresize" rows="10" name="content" disabled><?= $data['course']['content'] ?></textarea>
      </div>

    </form>
  </div>
</body>

</html>