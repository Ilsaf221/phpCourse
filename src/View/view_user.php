<?php
declare(strict_types=1);
require_once __DIR__ . '/../Infrastructure/Database/ConnectionProvider.php';
require_once __DIR__ . '/../Model/UserTable.php';
require_once __DIR__ . '/../Utils.php';
require_once __DIR__ . '/../Model/User.php';


$id = $_GET['id'];
$connection = ConnectionProvider::connectDatabase();
$table = new UserTable($connection);
//var_dump($id);
$user = $table -> find((int)$id);

require __DIR__ . '/../View/show_user.php';