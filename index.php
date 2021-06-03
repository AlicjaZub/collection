<?php

session_start();
include_once 'config.php';
include_once 'functions.php';

?>

<html lang="en">
<head>
    <link href="normalize.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Plants :)</title>
</head>
<body>
    <h1 class="main_heading">My plants: </h1>
    <div class="container">
        <?php echo details(getPlants()); ?>
    </div>
    <div class="add_plant_form">
        <h1>Would you like to add another plant?</h1>
        <form action="add_to_db.php">
            <label for="name">Name: </label>
            <input name="name" id="name" type="text" required>
            <label for="latin_name"> Latin Name: </label>
            <input name="latin_name" id="latin_name" type="text" required>
            <label for="hardiness"> Choose the hardiness: </label>
            <select name="hardiness" id="hardiness">
                <option value='3'>Tender</option>
                <option value='2'>Half Hardy</option>
                <option value='1'>Full Hardy</option>
            </select>
            <input class="button" value="Add a plant!" type="submit">
        </form>
    </div>
</body>
</html>