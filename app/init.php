<?php
session_start();
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DBNY', 'itech');
define('SESS', md5('itech'));
define('SITE', 'http://localhost/mvc_ori/');

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Model.php';
