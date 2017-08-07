#!/usr/bin/env php
<?php

if ($argc === 1) {
    echo "Usage: patch.php <adminer.php> > adminer.patched.php\n";
    exit(1);
}

$adminerPath = $argv[1];

$c = file_get_contents($adminerPath);
$cc = str_replace(
    '(file_exists("adminer.css"))', 
    '(getenv("ADMINER_THEME_PATH") || file_exists("adminer.css"))', 
    $c,
    $count);

if ($count === 1) {
    fwrite(STDOUT, $cc);
}

