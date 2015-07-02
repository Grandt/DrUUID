<!DOCTYPE html>
<html>
    <head>
        <title>DrUUID.Example1</title>
    </head>
<body>
<?php
include 'vendor/autoload.php';

//use UUID;

error_reporting(E_ALL | E_STRICT);
ini_set('error_reporting', E_ALL | E_STRICT);
ini_set('display_errors', 1);

echo "<pre>\n";
echo "Version 1 (Key: Current time): " . UUID::mint(1) . "\n";
echo "Version 3 (MD5 Hash).........: " . UUID::mint(3, "http://jkingweb.ca/code/php/lib.uuid/", UUID::nsURL) . " (Expected: 5a5f681a-d42f-32a5-88d9-63acbfa109b2)\n";
echo "Version 4 (Random)...........: " . UUID::mint(4) . "\n";
echo "Version 5 (SHA-1 Hash).......: " . UUID::mint(5, "http://jkingweb.ca/code/php/lib.uuid/", UUID::nsURL) . " (Expected: b59aa0b2-e4fa-5a54-bf32-e1183e29f027)\n";
echo "\n</pre>\n";
?>
</body>
</html>
