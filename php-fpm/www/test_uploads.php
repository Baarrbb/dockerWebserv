<?php
$directory = './uploads';

if (is_dir($directory)) {
    echo "Directory found: " . realpath($directory) . "<br>";
    $files = scandir($directory);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo $file . "<br>";
        }
    }
} else {
    echo "Directory not found: " . $directory . "<br>";
}
?>
