#!/usr/bin/env php
<?php

if ($argc === 1) {
    echo "Usage: patch.php adminer.php > adminer.patched.php\n\n";
    exit(1);
}

$adminerPath = $argv[1];

$c = file_get_contents($adminerPath);

echo $c;
exit;

$cc = str_replace(
    '"adminer.css"',
    'getenv("ADMINER_THEME_PATH")',
    $c,
    $count);

if ($count === 1) {
    fwrite(STDOUT, $cc);
}

