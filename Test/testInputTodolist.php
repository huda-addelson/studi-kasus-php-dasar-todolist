<?php

require_once "../Helper/input.php";

$name = input("Nama");
echo "Selamat Malam $name" . PHP_EOL;

$channel = input("Channel");
echo $channel . PHP_EOL;
