<?php

// generate correct html paths for sources
function url_for($script_path)
{
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

// this function use for privent cross site scripting
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

// to do redirections
function redirect_to($location) {
    header('Location: '.$location);
    exit();
}

// to ditect form action post
function request_is_post() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function request_is_get() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

?>
