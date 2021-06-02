<?php

function details(array $array): string
{
    $result = '';
    foreach ($array as $details) {
        if(is_Array($details)) {

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
//If I want to have images in a separate function:
//function getImage(array $array): string
//{
//    $image = '';
//    foreach ($array as $details) {
//        $image .= '<img src="images/' . $details['image'] . '" alt="' . $details['name'] . '">';
//    }
//    return $image;
//
//}
