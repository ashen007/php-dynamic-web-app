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

?>
