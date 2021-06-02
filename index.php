<?php

session_start();
include_once 'config.php';
include_once 'functions.php';

$query = $db->prepare('SELECT `name`, `latin_name`, `hardiness_type`, `image` FROM `details` 
    JOIN `hardiness_types` ON `details`.`hardiness`=`hardiness_types`.`id`');
$query->execute();
$plants = $query->fetchAll();

?>

<html lang="en">
<head>
    <link href="style.css" rel="stylesheet">
    <link href="normalize.css" rel="stylesheet">
    <title>Plants :)</title>
</head>
<body>
    <div class="container">
        <?php echo details($plants); ?>
    </div>
</body>
</html>
