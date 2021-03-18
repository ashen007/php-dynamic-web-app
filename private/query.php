<?php

function find_all_categories()
{
    global $db;

    $sql = 'select category_id,name from category ';
    $sql .= 'order by category_id asc';
    $result = mysqli_query($db, $sql);
    return $result;
}

?>