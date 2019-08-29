<?php
$srcPath = __DIR__;
$theme = getenv("ADMINER_THEME_PATH");

if ($_SERVER["REQUEST_URI"] == "/") {
    header("Location: /adminer.php");
    exit;
}

if (preg_match('/\/adminer\.css/', $_SERVER["REQUEST_URI"]) && $theme) {
    if (file_exists($theme)) {
        header("Content-Type: text/css");
        header('Cache-Control: max-age=0');
        echo file_get_contents($theme);
        return;
    }
}

return false;