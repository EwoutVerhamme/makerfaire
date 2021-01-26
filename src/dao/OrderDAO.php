<?php

require_once( __DIR__ . '/DAO.php');

class OrderDAO extends DAO {

    public function insertOrder($data){
        $errors = $this->validate($data);
        if(empty($errors)){
          $sql = "INSERT INTO `orders` (`email`,`first_name`,`last_name`,`zipcode`,`town`,`street`, `quantity` ) VALUES(:email,:first_name,:last_name, :zipcode, :town, :street, :quantity)";
          $stmt = $this->pdo->prepare($sql);
          $stmt->bindValue(':email',$data['email']);
          $stmt->bindValue(':first_name',$data['first_name']);
          $stmt->bindValue(':last_name',$data['last_name']);
          $stmt->bindValue(':zipcode',$data['zipcode']);
          $stmt->bindValue(':town',$data['town']);
          $stmt->bindValue(':street',$data['street']);
          $stmt->bindValue(':quantity',$data['quantity']);
          if($stmt->execute()){
            return true;
          }
        }
        return false;
      }
    
      public function validate($data){
        $errors = [];
        if (empty($data['email'])) {
          $errors['email'] = 'Gelieve een email in te geven';
        }
        if (empty($data['first_name'])) {
          $errors['first_name'] = 'Gelieve een voornaam in te geven';
        }
        if (empty($data['last_name'])) {
            $errors['last_name'] = 'Gelieve een achternaam in te geven';
          }
          if (empty($data['zipcode'])) {
            $errors['zipcode'] = 'Gelieve een postcode in te geven';
          }
          if (empty($data['town'])) {
            $errors['town'] = 'Gelieve een gemeente of stad in te geven';
          }
          if (empty($data['street'])) {
            $errors['street'] = 'Gelieve een straat in te geven';
          }

        return $errors;
      }


}