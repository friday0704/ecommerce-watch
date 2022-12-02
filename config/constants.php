<?php
$LOCALHOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB='ecommerce';

$conn = mysqli_connect($LOCALHOST, $DB_USERNAME, $DB_PASSWORD,$DB);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
echo "Connection established";