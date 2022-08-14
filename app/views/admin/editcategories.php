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
    <h2>Edit Kategori</h2>
    <form name="addCourse" action="<?= BASEURL; ?>/admin/editcategoriesaction" method="post">
      <input type="hidden" name="id" value="<?= $data['categories']['id'] ?>" required>
      <div class="input-box">
        <label for="">Nama Kategori :</label>
        <input type="text" placeholder="Judul" name="name" value="<?= $data['categories']['name'] ?>" required>
      </div>
      <div class="input-box">
        <label for="thumbnail">Jenis Kategori :</label>
        <select name="thumbnail" id="thumbnail" name="thumbnail">
          <option selected value="">Pilih Jenis Kategori</option>
          <option value="category1">Front End Developer</option>
          <option value="category2">Back End Developer</option>
          <option value="category3">UI/UX Design</option>
          <option value="category4">Data Science</option>
          <option value="category5">Hardware Engineer</option>
          <option value="category6">Security</option>

        </select>
      </div>

      <div class="input-box">
        <label for="">Deskripsi Kategori</label>
        <input type="text" placeholder="Deskripsi" name="description" value="<?= $data['categories']['description'] ?>" required>
      </div>

      <div class="input-box button">
        <input type="Submit" value="Edit Kategori">
      </div>
    </form>
  </div>
</body>

</html>