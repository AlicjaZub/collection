<?php

session_start();
include_once 'config.php';

$query = $db->prepare('SELECT `name`, `latin_name`, `hardiness` FROM `details`');
$query->execute();
$plants = $query->fetchAll();

//echo '<pre>';
//var_dump($plants);
//echo '</pre>';
function details($array)
{
    $something = '';
    foreach ($array as $details) {

        $something .= '<h1>' . $details['name'] . '</h1>';
        $something .= '<p><b> Latin name: </b>' . $details['latin_name'] . '</p>';
        $something .= '<p><b> Hardiness: </b>' . $details['hardiness'] . '</p>';
    }
    return $something;
}

?>

<html lang="en">
<head>
    <link href="style.css" rel="stylesheet">
    <title>Plants :)</title>
</head>
<body>
    <div class="container">
        <div>
            <?php echo details($plants); ?>


        </div>
    </div>
</body>
</html>


    <!--            --><?php //for($i = 0; $i < count($plants); $i++) {
//                    echo  $plants[$i]['name'];
//                    echo  $plants[$i]['latin_name'];
//                    echo  $plants[$i]['hardiness'];
//            } ?>