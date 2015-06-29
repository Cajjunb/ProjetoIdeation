<?php
require_once '../src/whatsprot.class.php';

$nickname = "Leandro";
$username = "55618661990"; // Your number with country code
$identity = "identity"; 
$password = "266782"; // your password
$target = "516185359872"; // target number (with country code)

$w = new WhatsProt($username, $identity, $nickname, TRUE);

$w->connect();
$w->loginWithPassword($password);

$w->sendMessage($target, "whatever...");
$w->pollMessage();

$w->disconnect();
?>