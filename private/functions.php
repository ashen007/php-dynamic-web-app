<?php

// generate correct html paths for sources
function url_for($script_path)
{
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function xss($script="") {
    return htmlspecialchars($script);
}

function error_404() {
    header($_SERVER['SERVER_PROTOCOL'].'404 Not Found');
    exit();
}

function error_500() {
    header($_SERVER['SERVER_PROTOCOL'].'500 Internal Server Error');
    exit();
}

function redirect_to($location) {
    header('Location: '.$location);
    exit();
}

?>
