<?php
class Admin extends Controller
{

  public function index()
  {
    $this->view('admin/index');
    $this->view('templates/sidebar');
  }



  public function alluser()
  {
    $this->view('templates/sidebar');
    $data['user'] = $this->model('User_model')->getAllUser();
    $this->view('admin/user', $data);
  }

  public function allcourse()
  {
    $this->view('templates/sidebar');
    $data['course'] = $this->model('Course_model')->getAllCourse();
    $this->view('admin/course', $data);
  }

  public function allcategories()
  {
    $this->view('templates/sidebar');
    $data['categories'] = $this->model('Categories_model')->getAllCategories();
    $this->view('admin/categories', $data);
  }

  public function addcourse()
  {
    $data['categories'] = $this->model('Categories_model')->getAllCategories();
    $this->view('templates/sidebar');
    $this->view('admin/addcourse', $data);
  }

  public function editcourse($id)
  {
    $data['categories'] = $this->model('Categories_model')->getAllCategories();
    $data['course'] = $this->model('Course_model')->getCourseById($id);
    $this->view('templates/sidebar');
    $this->view('admin/editcourse', $data);
  }
  public function viewcourse($id)
  {
    $data['categories'] = $this->model('Categories_model')->getAllCategories();
    $data['course'] = $this->model('Course_model')->getCourseById($id);
    $this->view('templates/sidebar');
    $this->view('admin/viewcourse', $data);
  }

  public function addcategories()
  {
    $this->view('templates/sidebar');
    $this->view('admin/addcategories');
  }
  public function editcategories($id)
  {
    $data['categories'] = $this->model('Categories_model')->getCategoriesById($id);
    $this->view('templates/sidebar');
    $this->view('admin/editcategories', $data);
  }
  public function viewcategories($id)
  {
    $data['categories'] = $this->model('Categories_model')->getCategoriesById($id);
    $this->view('templates/sidebar');
    $this->view('admin/viewcategories', $data);
  }

  public function addcourseaction()
  {
    $hasil = $this->model('Course_model')->addCourse($_POST);
    echo '<script>
    const baseurl = "http://localhost/spillcourse/public";
    </script>';
    // Notifikasi materi gagal ditambahkan
    if ($hasil == 0) {
      echo '<script>  
      alert("Materi Gagal ditambahkan");
      location.href = baseurl + "/admin/addcourse";
      </script>';
      // Notifikasi materi berhasil ditambahkan
    } else {
      echo '<script>  
      alert("Materi berhasil ditambahkan");
      location.href = baseurl + "/admin/viewcourse";
      </script>';
    }
  }

  public function editcourseaction()
  {
    $hasil = $this->model('Course_model')->editCourse($_POST);
    echo '<script>
    const baseurl = "http://localhost/spillcourse/public";
    </script>';
    // Notifikasi materi gagal ditambahkan
    if ($hasil == 0) {
      echo '<script>  
      alert("Materi Gagal diedit");
      location.href = baseurl + "/admin/viewcourse";
      </script>';
      // Notifikasi materi berhasil ditambahkan
    } else {
      echo '<script>  
      alert("Materi berhasil diedit");
      location.href = baseurl + "/admin/viewcourse";
      </script>';
    }
  }

  public function addcategoriesaction()
  {
    $hasil = $this->model('Categories_model')->addCategories($_POST);
    echo '<script>
    const baseurl = "http://localhost/spillcourse/public";
    </script>';
    // Notifikasi materi gagal ditambahkan
    if ($hasil == 0) {
      echo '<script>  
      alert("Kategori Gagal ditambahkan");
      location.href = baseurl + "/admin/addcategories";
      </script>';
      // Notifikasi materi berhasil ditambahkan
    } else {
      echo '<script>  
      alert("Kategori berhasil ditambahkan");
      location.href = baseurl + "/admin/viewcategories";
      </script>';
    }
  }
  public function editcategoriesaction()
  {
    $hasil = $this->model('Categories_model')->editCategories($_POST);
    echo '<script>
    const baseurl = "http://localhost/spillcourse/public";
    </script>';
    // Notifikasi materi gagal ditambahkan
    if ($hasil == 0) {
      echo '<script>  
      alert("Kategori Gagal ditambahkan");
      location.href = baseurl + "/admin/viecategories";
      </script>';
      // Notifikasi materi berhasil ditambahkan
    } else {
      echo '<script>  
      alert("Kategori berhasil ditambahkan");
      location.href = baseurl + "/admin/viewcategories";
      </script>';
    }
  }

  public function deleteuser($id)
  {
    echo '<script>
    const baseurl = "http://localhost/spillcourse/public";
    </script>';
    $hasil = $this->model('User_model')->deleteDataUser($id);
    // Notifikasi pengguna gagal dihapus
    if ($hasil == 0) {
      echo '<script>  
      alert("Pengguna Gagal dihapus");
      location.href = baseurl + "/admin/viewuser";
      </script>';
      // Notifikasi pengguna berhasil dihapus
    } else {
      echo '<script>  
      alert("Pengguna berhasil dihapus");
      location.href = baseurl + "/admin/viewuser";
      </script>';
    }
  }

  public function deletecourse($id)
  {
    echo '<script>
    const baseurl = "http://localhost/spillcourse/public";
    </script>';
    $hasil = $this->model('Course_model')->deleteDataCourse($id);
    // Notifikasi materi gagal dihapus
    if ($hasil == 0) {
      echo '<script>  
      alert("Materi Gagal dihapus");
      location.href = baseurl + "/admin/viewcourse";
      </script>';
      // Notifikasi materi berhasil dihapus  
    } else {
      echo '<script>  
      alert("Materi berhasil dihapus");
      location.href = baseurl + "/admin/viewcourse";
      </script>';
    }
  }

  public function deletecategories($id)
  {
    echo '<script>
    const baseurl = "http://localhost/spillcourse/public";
    </script>';
    $hasil = $this->model('Categories_model')->deleteDataCategories($id);
    // Notifikasi materi gagal dihapus
    if ($hasil == 0) {
      echo '<script>  
      alert("Kategori Gagal dihapus");
      location.href = baseurl + "/admin/viewcategories";
      </script>';
      // Notifikasi materi berhasil dihapus  
    } else {
      echo '<script>  
      alert("Kategori berhasil dihapus");
      location.href = baseurl + "/admin/viewcategories";
      </script>';
    }
  }
}
