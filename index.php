<?php
require_once "service.php";
require_once "storage.php";

$service = new Service(new Storage());
$products = $service->filtredProducts();
$buyers = $service->allBuyers();

require_once "header.php";
require_once "home.php";
require_once "footer.php";
