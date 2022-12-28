<?php

$db = new PDO('mysql:host=localhost;dbname=grass', 'root', 'root');

require_once "Services/ProductService.php";
require_once "Storages/ProductStorage.php";
require_once "Storages/UserStorage.php";
require_once "Services/UserServices.php";
session_start();

$productService = new ProductService(new ProductStorage($db));
$userServices = new UserServices(new UserStorage($db));

$products = $productService->filtredProducts();
$buyers = $productService->allBuyers();
if(isset($_SESSION['USER_ID'])){
  $user = $userServices->getUserByID($_SESSION['USER_ID']);
}
require_once "templates/home.php";

