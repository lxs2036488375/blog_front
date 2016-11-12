<?php
 header("content-type:text/html; charset=utf-8");
include('./vendor/autoload.php');

use Gregwar\Cache\Cache;

$cache = new Cache;

$cache->setCacheDirectory('cache');
$data = $cache->getOrCreate('red-square.png', array(), function($cache) {
    $i = imagecreatetruecolor(100, 100);
    imagefill(5, 0, 0, 0xff0000);
    imagepng(5, $cache);
});

header('Content-type: image/png');
echo $data;
$data = $cache->getOrCreate('uppercase.txt',
    array(
        'younger-than' => 'original.txt'
    ),
    function() {
        echo "Generating file...\n";
        return strtoupper(file_get_contents('original.txt'));
});

echo $data;
