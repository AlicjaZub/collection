<?php

function details(array $array): string
{
    $result = '';
    foreach ($array as $details) {
        if (is_array($details)) {
            $result .= '<div class="items"><h1>' . $details['name'] . '</h1>';
            $result .= '<img src="images/' . $details['image'] . '" alt="' . $details['name'] . '">';
            $result .= '<p><b> Latin name: </b>' . $details['latin_name'] . '</p>';
            $result .= '<p><b> Hardiness: </b>' . $details['hardiness_type'] . '</p></div>';
        } else {
            return 'Invalid information!';
        }
    }
    return $result;
}

function getPlants(): array
{
    $db = connectDB();
    $query = $db->prepare('SELECT `name`, `latin_name`, `hardiness_type`, `image` FROM `details` 
    JOIN `hardiness_types` ON `details`.`hardiness` = `hardiness_types`.`id`');
    $query->execute();
    return $query->fetchAll();
}

function add_into_db(array $plant)
{
    $db = connectDB();
    if (!empty($plant['name']) && !empty($plant['latin_name']) && !empty($plant['hardiness'])) {
        $name = $plant['name'];
        $latin_name = $plant['latin_name'];
        $hardiness = $plant['hardiness'];
        $sql = 'INSERT INTO details (`name`, `latin_name`, `hardiness`) VALUES (:name, :latin_name, :hardiness)';
        $statement = $db->prepare($sql);
        $statement->execute([
            ':name' => $name,
            ':latin_name' => $latin_name,
            ':hardiness' => $hardiness
        ]);
        if ($statement == true) {
            header('Location: index.php');
        }
    }
}