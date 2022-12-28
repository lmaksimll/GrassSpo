<?php

use \PDO as PDO;

class UserStorage
{
    private PDO $db;

  public function __construct($db){
    $this->db = $db;
  }

  public function create($params){
    $stmt = $this->db->prepare('
    INSERT INTO grass.user (full_name, email, password,interests, vk, blood_type, rhesus_factor) 
    VALUES (?,?,?,?,?,?,?)
    ');

    $stmt->execute([
      $params['full_name'],
      $params['email'],
      $params['password'],
      $params['interests'],
      $params['vk'],
      $params['blood_type'],
      $params['rhesus_factor']
    ]);
  }

  public function getUser($email, $password){
    $stmt = $this->db->prepare('
    SELECT * FROM grass.user WHERE email = ? AND password = ?
    ');
    $stmt->execute([
      $email,
      $password
    ]);
    return $stmt->fetch();
  }

  public function getUserByID($id) {
    $stmt = $this->db->prepare('
    SELECT * FROM grass.user WHERE id = ?
    ');
    $stmt->execute([
      $id
    ]);
    return $stmt->fetch();
  }
}