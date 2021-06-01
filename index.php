<?php

session_start();
include_once 'config.php';
include_once 'functions.php';

$query = $db->prepare('SELECT `name`, `latin_name`, `hardiness_type`, `image` FROM `details` 
    JOIN `hardiness_types` ON `details`.`hardiness`=`hardiness_types`.`id`');
$query->execute();
$plants = $query->fetchAll();
//
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

        <form action="">
            <label for="name">Name: </label>
            <input name="name" id="name" type="text">
            <label for="latin_name"> Latin Name: </label>
            <input name="latin_name" id="latin_name" type="text">
            <label for="hardiness"> Choose the hardiness: </label>
            <select name="hardiness" id="hardiness" >
                <option value="Tender">Tender</option>
                <option value="Half Hardy">Half Hardy</option>
                <option value="Full Hardy">Full Hardy</option>
            </select>
            <label for="image"> Image: </label>
            <input name="image" id="image" type="file">
            <input class="button" value="Add a plant!" type="submit">
        </form>
</body>
</html>


    <!--            --><?php //for($i = 0; $i < count($plants); $i++) {
//                    echo  $plants[$i]['name'];
//                    echo  $plants[$i]['latin_name'];
//                    echo  $plants[$i]['hardiness'];
//            } ?>

<!--        <div class="image">-->
<!--            --><?php //echo getImage($plants); ?>
<!--        </div>-->
