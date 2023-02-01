<?php
include_once 'db.php';

function test_input($text){
$text = trim($text);
$text= strip_tags($text);
$text = stripslashes($text);
return $text;
}

?>