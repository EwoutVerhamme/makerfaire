<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/OrderDAO.php';


class OrderController extends Controller {

  function __construct() {
    $this->orderDAO = new OrderDAO();
  }

  public function index() {
    $this->set('title', 'Home');
  }

}
