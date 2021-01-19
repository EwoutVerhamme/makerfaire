<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/OrderDAO.php';


class OrderController extends Controller {

  function __construct() {
    $this->orderDAO = new OrderDAO();
  }

  public function home() {
    $this->set('title', 'Home');
  }

  public function kit() {
    $this->set('title', 'DIY-pakket');
  }

  public function tutorial() {
    $this->set('title', 'Tutorial');
  }

}