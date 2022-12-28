<?php

$db = new PDO('mysql:host=localhost;dbname=grass', 'root', 'root');

require_once 'Services/UserServices.php';
require_once 'Storages/UserStorage.php';

$userService = new UserServices(new UserStorage($db));

$userService->registration();