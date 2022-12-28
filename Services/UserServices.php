<?php

class UserServices {

  private UserStorage $userStorage;

  public function __construct($storage) {
    $this->userStorage = $storage;
  }

  public function registration() {

    $registrationParams = array();

    try {
      $this->checkEmptyParams('full_name', $registrationParams);
      $this->checkEmptyParams('email', $registrationParams);
      $this->checkEmptyParams('password', $registrationParams);
      $this->checkEmptyParams('interests', $registrationParams);
      $this->checkEmptyParams('vk', $registrationParams);
      $this->checkEmptyParams('blood_type', $registrationParams);
      $this->checkEmptyParams('rhesus_factor', $registrationParams);
    } catch (RuntimeException $e) {

    }

    try {
      $this->userStorage->create($registrationParams);
      header('Location: /');
    } catch (Exception $exception) {
      header('Location: templates/registration-view.php');
    }

  }

  public function login() {

    try {

      if(!isset($_GET['email'])){
        throw new RuntimeException();
      }

      if(!isset($_GET['password'])){
        throw new RuntimeException();
      }
    } catch (RuntimeException $exception) {
      header('Location: /templates/authorization-view.php');
    }

    $user = $this->userStorage->getUser($_GET['email'], $_GET['password']);
    if(empty($user)){
      header('Location: /templates/authorization-view.php');
    } else {
      session_start();
      $_SESSION['USER_ID'] = $user['id'];
      header('Location: /');
    }
  }

  public function getUserByID ($id) {
    return $this->userStorage->getUserByID($id);
  }

  public function checkEmptyParams($key, array &$resultArray){
    if(isset($_POST[$key]))
    {
      $resultArray[$key] = $_POST[$key];
    } else {
      throw new RuntimeException();
    }
  }
}