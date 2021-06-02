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
    <div>
        <h1>Would you like to add another plant?</h1>
        <form action="add_to_db.php">
            <label for="name">Name: </label>
            <input name="name" id="name" type="text">
            <label for="latin_name"> Latin Name: </label>
            <input name="latin_name" id="latin_name" type="text">
            <label for="hardiness"> Choose the hardiness: </label>
            <select name="hardiness" id="hardiness" >
                <option value='3'>Tender</option>
                <option value='2'>Half Hardy</option>
                <option value='1'>Full Hardy</option>
            </select>
            <input class="button" value="Add a plant!" type="submit">
        </form>
    </div>
</body>
</html>