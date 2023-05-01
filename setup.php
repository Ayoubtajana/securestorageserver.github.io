<?php

    require_once('vendor/autoload.php');

    $google = new Google_Client();

    $google->setClientId('461384253796-gtdkt3481gvqd7mvdk2ts9v3b2h1621u.apps.googleusercontent.com');

    $google->setClientSecret('8NYowIpgGssXH6hPw5nMRHH8');

    $google->setRedirectUri('http://localhost/api/login_with_google/profile.php');

    $google->addScope('email');

    $google->addScope('profile');

    session_start();

?>
