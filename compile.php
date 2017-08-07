#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$pharFile = __DIR__."/adminer.phar";

if (file_exists($pharFile)) {
    unlink($pharFile);
}

echo "Starting compiling $pharFile\n";

$phar = new \Phar($pharFile, 0);
$phar->setSignatureAlgorithm(\Phar::SHA1);
$phar->startBuffering();

$finder = new Finder();
$files = iterator_to_array($finder->files()->in(array('src')));
foreach ($files as $file) {
  echo "Processing: ".$file->getPathName()."\n";
  $phar->addFromString($file->getPathName(), file_get_contents($file));
}

echo "Packaging ".count($files)." files.\n";

$content = file_get_contents(__DIR__."/bin/adminer");
$content = preg_replace('{^#!/usr/bin/env php\s*}', '', $content);
$phar->addFromString('bin/adminer', $content);

$stub = <<<EOL
#!/usr/bin/env php
<?php
Phar::mapPhar('adminer.phar');
require 'phar://adminer.phar/bin/adminer';
__HALT_COMPILER();
EOL;

$phar->setStub($stub);
$phar->stopBuffering();

echo "Generated $pharFile \n";
unset($phar);
chmod($pharFile, 0755);

echo "File size is ".round(filesize($pharFile) / 1024 / 1024, 2)." MB.\n";
echo "Complete!\n";
