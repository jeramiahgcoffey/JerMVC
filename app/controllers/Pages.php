<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->post_model = $this->model('Post');
  }

  public function index()
  {
    $posts = $this->post_model->get_posts();

    $data = [
      'title' => 'Welcome!',
      'posts' => $posts
    ];
    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = ['title' => 'About Us'];
    $this->view('pages/about', $data);
  }
}
