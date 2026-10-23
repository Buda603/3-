<?php
$GLOBALS['config'] = require __DIR__ . '/config.php';

require_once __DIR__ . '/autoload.php';

if (!empty($GLOBALS['config']['debug'])) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

mb_internal_encoding('UTF-8');
date_default_timezone_set('Europe/Moscow');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}