<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'bootstrap');

$dbconnect = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);

if ($dbconnec->connect_error) {
    die('Database Not Connect. Error :' . $dbconnec->connect_error);
}