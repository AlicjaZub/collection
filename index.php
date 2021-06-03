<?php

require_once 'config.php';
require_once 'functions.php';

function getPlants(): array
{
    $db = connectDB();
    $query = $db->prepare('SELECT `name`, `latin_name`, `hardiness_type`, `image` FROM `details` 
    JOIN `hardiness_types` ON `details`.`hardiness`=`hardiness_types`.`id`');
    $query->execute();
    return $query->fetchAll();
}

?>

<html lang="en">
<head>
    <link href="style.css" rel="stylesheet">
    <link href="normalize.css" rel="stylesheet">
    <title>Plants :)</title>
</head>
<body>
    <div class="container">
        <?php echo details(getPlants()); ?>
    </div>
</body>
</html>
