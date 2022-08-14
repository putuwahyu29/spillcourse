<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/dashboard.css">
  <!-- Boxiocns CDN Link -->
  <title>Dashboard | SpillCourse</title>
  <link rel="shortcut icon" href="<?= BASEURL ?>/img/favicon.ico">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <section class="home-section">
    <div class="home-content">
      <span class="text">Daftar Materi</span>
    </div>
    <div class="table">
      <div class="tableHeader">
        <input placeholder="Cari..." />
        <div class="addNew">
          <button>
            <a href="<?= BASEURL ?>/admin/addcourse"> + Tambah Materi</a>
          </button>
        </div>

      </div>
      <div class="tableSection">
        <div>

        </div>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Materi</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($data['course'] as $course) { ?>
              <tr>
                <td><?= $i . '<br>'; ?></td>
                <td><?= $course['name'] . '<br>'; ?></td>
                <td><?= $course['description'] . '<br>'; ?></td>
                <td>
                  <button>
                    <a href="<?= BASEURL; ?>/admin/viewcourse/<?= $course['id']; ?>"><i class="bx bx-show"></i></a>
                  </button>
                  <button>
                    <a href="<?= BASEURL; ?>/admin/editcourse/<?= $course['id']; ?>"><i class="bx bxs-edit"></i></a>
                  </button>
                  <button>
                    <a href="<?= BASEURL; ?>/admin/deletecourse/<?= $course['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ?')"><i class='bx bxs-trash'></i></a>
                  </button>
                </td>
              </tr>
            <?php
              $i++;
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="pagination">
        <div><i class='bx bx-chevrons-left'></i></i></div>
        <div><i class='bx bx-chevron-left'></i></div>
        <div>1</div>
        <div>2</div>
        <div><i class='bx bx-chevron-right'></i></div>
        <div><i class='bx bx-chevrons-right'></i></i></div>
      </div>
    </div>
  </section>
</body>

</html>