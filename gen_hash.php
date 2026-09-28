<?php
require 'vendor/autoload.php';
$optn = ['cost' => 8];
$patt = "XquxmymXDtWRA66D";
$hash = md5($patt . 'owner123');
$pass = password_hash($hash, PASSWORD_DEFAULT, $optn);
echo "Hash: " . $pass . "\n";
echo "MD5: " . $hash . "\n";