<?php
require "function.php";

$mysqli = db_connect('localhost', 'root', '', 'directory');
$cats = getCategories($mysqli);

$cats = createTree($cats);

echo renderTemplate('template.php', ['cats' => $cats]);
