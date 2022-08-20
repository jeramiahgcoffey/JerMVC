<?php
class Post
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function get_posts()
  {
    $this->db->query('SELECT * FROM posts');

    return $this->db->result_set();
  }
}
