<?php

require_once 'vendor/autoload.php';

define('MAILGUN_KEY', '#');
define('MAILGUN_PUBKEY', '#');
define('MAILGUN_DOMAIN', '#');
define('MAILGUN_LIST', '#');
define('MAILGUN_SECRET', '#');

$mailgun = new Mailgun\Mailgun(MAILGUN_KEY);
$mailgunValidate = new Mailgun\Mailgun(MAILGUN_PUBKEY);

$mailgunOptIn = $mailgun->OptInHandler();