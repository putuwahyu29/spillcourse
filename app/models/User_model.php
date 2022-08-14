<?php
class User_model
{
  private $table = 'tbl_user';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function signupUser($data)
  {
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Cek email sudah ada atau belum
    $sql = "SELECT COUNT(email) AS num FROM $this->table WHERE email = :email";
    $this->db->query($sql);
    $this->db->bind('email', $data['email']);
    $this->db->execute();
    $row =  $this->db->single();

    if ($row['num'] > 0) {
      return 0;
    }
    // Cek password sudah sama atau belum
    $password2 = isset($_POST['password2']) ? trim($_POST['password2']) : '';
    if ($password != $password2) {
      return -1;
    }
    // Insert ke database
    $sql = "INSERT INTO . $this->table VALUES ('',:name,:email,:password)";
    $this->db->query($sql);
    $this->db->bind('name', $data['name']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function signinUser($data)
  {

    $sql = "SELECT * FROM $this->table WHERE email = :email";
    $this->db->query($sql);
    $this->db->bind('email', $data['email']);
    $this->db->execute();
    $row =  $this->db->single();
    // Email tidak ada
    if ($row === false) {
      return -1;
      // Cek Password apakah sama atau tidak
    } else if (password_verify($data['password'], $row['password'])) {
      // Set session
      $_SESSION['login'] = true;
      return 1;
    } else {
      return 0;
    }
  }

  public function getAllUser()
  {
    $this->db->query('SELECT*FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function deleteDataUser($id)
  {
    $query = "DELETE FROM user WHERE id= :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
  }
}
