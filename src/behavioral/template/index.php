<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Template\Facebook;
use Template\Twitter;

/**
 * The client code.
 */
echo "Username: \n";
$username = readline();
echo "Password: \n";
$password = readline();
echo "Message: \n";
$message = readline();

echo "\nChoose the social network to post the message:\n" .
    "1 - Facebook\n" .
    "2 - Twitter\n";
$choice = readline();

match ((int)$choice) {
    1       => $network = new Facebook($username, $password),
    2       => $network = new Twitter($username, $password),
    default => die("Sorry, I'm not sure what you mean by that.\n")
};

$network->post($message);

