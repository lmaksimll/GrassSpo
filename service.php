<?php

class Service {
  private Storage $storage;

  public function __construct($storage) {
    $this->storage = $storage;
  }

  public function filtredProducts() {
    if(isset($_GET['number']) && isset($_GET['name']) && isset($_GET['min_mass']) && isset($_GET['max_mass'])) {
      return $this->storage->fetchProducts($this->preparedGet());
    } else {
      return $this->storage->fetch();
    }
  }

  public function allBuyers(){
    return $this->storage->allBuyers();
  }

  private function preparedGet() {
    $this->replaceIfNotExist('number');
    $this->replaceIfNotExist('name');
    if(isset($_GET['min_mass'])){
      if($_GET['min_mass'] === ''){
        $_GET['min_mass'] = 0;
      }
    }
    if(isset($_GET['max_mass'])){
      if($_GET['max_mass'] === ''){
        $_GET['max_mass'] = 99999;
      }
    }
    return $_GET;
  }

  private function replaceIfNotExist($key) {
    if (isset($_GET[$key])) {
      if($_GET[$key] === '') {
        $_GET[$key] = '%';
      }
    }
  }
}