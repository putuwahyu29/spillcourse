<?php
class Form extends Controller
{
  public function index()
  {
    $this->view('form/index');
    $this->view('templates/header');
    $this->view('templates/footer');
  }

  public function signup()
  {
    $hasil = $this->model('User_model')->signupUser($_POST);
    echo '<script>
    const baseurl = "http://localhost/spillcourse/public";
    </script>';
    if ($hasil == 0) {
      echo '<script>  
      alert("Email sudah ada");
      location.href = baseurl + "/form";
      </script>';
      // Notifikasi password tidak sama
    } else if ($hasil == -1) {
      echo '<script>  
      alert("Password tidak sama");
      location.href = baseurl + "/form";
      </script>';
      // Notifikasi berhasil daftar
    } else {
      echo '<script>  
      alert("Daftar Sukses");
      location.href = baseurl + "/form";
      </script>';
    }
  }

  public function signin()
  {
    $this->view('form/index');
    $this->view('templates/header');
    $this->view('templates/footer');


    $hasil = $this->model('User_model')->signinUser($_POST);
    echo '<script>
    const baseurl = "http://localhost/spillcourse/public";
    </script>';
    if ($hasil > 0) {
      echo '<script>  
      alert("Berhasil Masuk");
      location.href = baseurl + "/form";
      </script>';
      // Notifikasi email atau password salah
    } else {
      echo '<script>  
      alert("Email dan Password Salah");
      location.href = baseurl + "/form";
      container.classList.add("active");
      </script>';
    }
  }
}
