<?php
function db_connect($host, $user, $password, $db_name) {
    $link = mysqli_connect($host, $user, $password, $db_name);

    if (!$link) {
        die('Помилка підключення (' .mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    return $link;
}

function getCategories($link) {
    if ($result = mysqli_query($link, "SELECT * FROM categories")) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}

function createTree($arr) {
    $parents_arr = array();
    foreach ($arr as $kay=>$item) {
        $parents_arr[$item['parent_id']][$item['id']] = $item;
    }


    return $parents_arr;
}
?>