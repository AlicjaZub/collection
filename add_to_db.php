<?php

session_start();
require_once 'config.php';

if (isset($_GET)) {
    $name = $_GET['name'];
    $latin_name = $_GET['latin_name'];
    $hardiness = $_GET['hardiness'];
    $sql = 'INSERT INTO details (`name`, `latin_name`, `hardiness`) VALUES (:name, :latin_name, :hardiness)';
    $statement = $db->prepare($sql);
    $statement->execute([
        ':name' => $name,
        ':latin_name' => $latin_name,
        ':hardiness' => $hardiness
    ]);
    if ($statement == true) {
        header('Location: index.php');
        echo 'Plant added to your collection!';
    }
}

