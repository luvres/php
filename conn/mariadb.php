<?php

  # MySQl (MariaDB)
  $DB_HOST = "mariadb-host";
  $DB_USER = "root";
  $DB_PASS = "maria";
  $DB_NAME = "mysql";
  $DB_PORT = "3306";

  $conn = @mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

  if($conn){
    $result = "MariaDB (conn) -> Connect!";
  }else{
    $result = "Connect Fail ... ".mysqli_connect_error();
  }
