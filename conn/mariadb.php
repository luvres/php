<?php

  # MySQl (MariaDB)
  //$DB_HOST = "localhost";
  //$DB_HOST = "169.8.192.130";
  //$DB_HOST = "izone.changeip.org";
  $DB_HOST = "mariadb-host";
  $DB_USER = "root";
  $DB_PASS = "maria";
  $DB_NAME = "dbzone";
  $DB_PORT = "3306";

  $conn = @mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

  if($conn){
    $result = "MariaDB (conn) -> Connect!";
  }else{
    $result = "Connect Fail ... ".mysqli_connect_error();
  }
