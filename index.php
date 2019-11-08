<?php

require "function.php";

$mysqli = db_connect('localhost', 'root', '', 'directory');
$cats = getCategories($mysqli);

$cats = createTree($cats);

echo '<pre>';
print_r($cats);
?>