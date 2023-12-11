<!-- Include this file in the header -->
<?php
// constants for database
  define('DB_HOST', 'localhost');
  define('DB_USER', 'luke');
  define('DB_PASSWORD', '123456');
  define('DB_NAME', 'php_dev');

  // Create connection instance
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // Check the connection
  if ($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
  }

