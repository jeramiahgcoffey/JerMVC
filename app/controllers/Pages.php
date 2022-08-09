<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
  }

  public function about($id = 1)
  {
    echo $id;
  }
}
