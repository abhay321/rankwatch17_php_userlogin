<?php
/** MySQL hostname */
$DB_HOST = 'localhost';

/** The name of the database */
$DB_NAME = 'rank';

/** MySQL database username */
$DB_USER = 'root';

/** MySQL database password */
$DB_PASSWORD = '';

$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>