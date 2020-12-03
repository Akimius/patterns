<?php

require 'vendor/autoload.php';

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

// Now, let's create a proper social network object and send the message.
if ((int)$choice === 1) {
    $network = new Facebook($username, $password);
} elseif ((int)$choice === 2) {
    $network = new Twitter($username, $password);
} else {
    die("Sorry, I'm not sure what you mean by that.\n");
}

$network->post($message);

