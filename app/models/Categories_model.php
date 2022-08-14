<?php
class Categories_model
{
  private $table = 'tbl_categories';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAllCategories()
  {
    $this->db->query('SELECT*FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getCategoriesById($id)
  {
    $this->db->query('SELECT * FROM tbl_categories WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }


  public function addCategories($data)
  {
    $sql = "INSERT INTO . $this->table VALUES ('',:name,:thumbnail,:description)";
    $this->db->query($sql);
    $this->db->bind('name', $data['name']);
    $this->db->bind('thumbnail', $data['thumbnail']);
    $this->db->bind('description', $data['description']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteDataCategories($id)
  {
    $query = "DELETE FROM . $this->table WHERE id= :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
