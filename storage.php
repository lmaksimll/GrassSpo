<?php
class Storage
{

  private $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=grass', 'root', 'root');
  }

  public function fetchProducts($get) {
    $stmt = $this->db->prepare('
    SELECT * FROM grass.product INNER JOIN grass.buyer ON product.buyer_id = buyer.id_buyer
    WHERE product.number LIKE ?
    AND buyer.name LIKE ?
    AND product.mass > ? AND product.mass < ?
    ');

    $stmt->execute([
      $get['number'],
      $get['name'],
      intval($get['min_mass']),
      intval($get['max_mass'])
    ]);

    return $stmt->fetchAll();
  }

  public function fetch () {
    return $this->db->query('SELECT * FROM grass.product INNER JOIN grass.buyer ON product.buyer_id = buyer.id_buyer')->fetchAll();
  }

  public function allBuyers(){
    return $this->db->query('SELECT * FROM grass.buyer')->fetchAll();
  }

}

