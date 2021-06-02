<?php

session_start();
require_once 'config.php';

if(isset($_POST['submit'])){
    $name = $_GET['name'];
    $latin_name = $_GET['latin_name'];
    $hardiness = $_GET[];
    $sql = 'INSERT INTO plants(name) VALUES(:name)';





}

