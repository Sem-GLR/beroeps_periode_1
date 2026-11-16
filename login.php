<?php

session_start();
require __DIR__ . '/views/login.view.php';

$token = hex2bin(openssl_random_pseudo_bytes(32));
$_SESSION["token"] = $token;