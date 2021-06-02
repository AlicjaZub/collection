<?php

session_start();
include_once 'config.php';
include_once 'functions.php';

$query = $db->prepare('SELECT `name`, `latin_name`, `hardiness_type`, `image` FROM `details` 
    JOIN `hardiness_types` ON `details`.`hardiness`=`hardiness_types`.`id`');
$query->execute();
$plants = $query->fetchAll();

//Checking if the query worked:
//echo '<pre>';
//var_dump($plants);
//echo '</pre>';

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

<!--A way to do it with for loop - don't do it this way, use foreach-->
    <!--            --><?php //for($i = 0; $i < count($plants); $i++) {
//                    echo  $plants[$i]['name'];
//                    echo  $plants[$i]['latin_name'];
//                    echo  $plants[$i]['hardiness'];
//            } ?>
<!--If I want the image in a separate div:-->
<!--        <div class="image">-->
<!--            --><?php //echo getImage($plants); ?>
<!--        </div>-->
