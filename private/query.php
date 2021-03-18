<?php

function find_all_categories()
{
    global $db;

    $sql = 'select id,name from category ';
    $sql .= 'order by member_privilege asc';
    $result = mysqli_query($db, $sql);
    confirm_result($result);
    return $result;
}

?>