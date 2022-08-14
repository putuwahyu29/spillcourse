<?php
class Home extends Controller
{
  public function index()
  {
    $data['course'] = $this->model('Course_model')->getTopCourse();
    $data['categories'] = $this->model('Categories_model')->getAllCategories();
    $this->view('home/index', $data);
    $this->view('templates/header');
    $this->view('templates/footer');
  }
}
