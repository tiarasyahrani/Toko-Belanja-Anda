<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('478248295792-q0otkvkcqt9jr5c1knef5bqljdjol1jn.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/tokobelanjaandaaa/google-callback.php');
$client->addScope("email");
$client->addScope("profile");

$client->setPrompt('consent select_account');

header('Location: ' . $client->createAuthUrl());
exit;
