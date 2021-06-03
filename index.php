<?php

require_once 'config.php';
require_once 'functions.php';

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
