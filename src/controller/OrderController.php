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

  public function checkout() {
    $this->set('title', 'Bestellen');
    
    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertOrder'){
        $insertedOrder = $this->orderDAO->insertOrder($_POST);
        if(!$insertedOrder){
          $errors = $this->orderDAO->validate($_POST);
          $this->set('errors',$errors);
        }else{
          $_SESSION['info'] = 'Bedankt voor je order';
          header('Location:index.php?page=thankyou');
          exit();
        }
      }
  }

  }

  public function thankyou() {
    $this->set('title', 'Bedankt voor uw aankoop');
  }
}