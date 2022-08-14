<?php
class Course_model
{
  private $table = 'tbl_course';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAllCourse()
  {
    $this->db->query('SELECT*FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getCourseById($id)
  {
    $this->db->query('SELECT * FROM tbl_course WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function getSearchCourse($data)
  {
    $name = $data['keyword'];
    $this->db->query('SELECT*FROM ' . $this->table . ' WHERE name LIKE :name');
    $this->db->bind('name', "%$name%");
    return $this->db->resultSet();
  }

  public function getTopCourse()
  {
    $this->db->query('SELECT*FROM ' . $this->table . ' ORDER BY id DESC LIMIT 3');
    return $this->db->resultSet();
  }

  public function addCourse($data)
  {
    $sql = "INSERT INTO . $this->table VALUES ('',:name,:thumbnail,:description,:content,:categories_id)";
    $this->db->query($sql);
    $this->db->bind('name', $data['name']);
    $this->db->bind('thumbnail', $data['thumbnail']);
    $this->db->bind('description', $data['description']);
    $this->db->bind('content', $data['content']);
    $this->db->bind('categories_id', $data['categories_id']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function editCourse($data)
  {
    $sql = "UPDATE . $this->table SET name=:name,thumbnail=:thumbnail,description=:description,content=:content,categories_id=:categories_id WHERE id=:id";
    $this->db->query($sql);
    $this->db->bind('id', $data['id']);
    $this->db->bind('name', $data['name']);
    $this->db->bind('thumbnail', $data['thumbnail']);
    $this->db->bind('description', $data['description']);
    $this->db->bind('content', $data['content']);
    $this->db->bind('categories_id', $data['categories_id']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteDataCourse($id)
  {
    $query = "DELETE FROM . $this->table WHERE id= :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
