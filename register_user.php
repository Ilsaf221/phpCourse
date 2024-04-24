<?php

require_once __DIR__ . '/src/Infrastructure/Database/ConnectionProvider.php';
require_once __DIR__ . '/src/Model/User.php';
require_once __DIR__ . '/src/Model/UserTable.php';
require_once __DIR__ . '/src/Utils.php';

const DATE_TIME_FORMAT = 'Y-m-d';

$user = new User (
    null,
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['middle_name'],
    $_POST['gender'],
    Utils::parseDateTime($_POST['birth_date'], DATE_TIME_FORMAT),
    $_POST['email'],
    $_POST['phone'] ?? null,
    $_POST['avatar_path'] ?? null,
);

$connection = ConnectionProvider::connectDatabase();
$table = new UserTable($connection);

$UserId = $table->saveUserToDatabase($user);

$redirectUrl = "/src/View/view_user.php?id=$UserId";
header(header:'Location: ' . $redirectUrl, replace: true, response_code:303);
die();