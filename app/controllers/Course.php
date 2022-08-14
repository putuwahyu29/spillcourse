<?php
class Course extends Controller
{
  public function index()
  {
    $data['course'] = $this->model('Course_model')->getAllCourse();
    $this->view('course/index', $data);
    $this->view('templates/header');
    $this->view('templates/footer');
  }

  public function search()
  {
    echo json_encode($this->model('Course_model')->getSearchCourse($_POST));
  }

  public function viewcourse($id)
  {
    $data['course'] = $this->model('Course_model')->getCourseById($id);
    $this->view('course/viewcourse', $data);
    $this->view('templates/header');
    $this->view('templates/footer');
  }
}
