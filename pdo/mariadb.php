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

  try {
    $PDO = new PDO( 'mysql:host='.$DB_HOST.
                    ';port='.$DB_PORT.
                    ';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
    $resPDO =  "MariaDB (PDO) -> Connect!";

  } catch (PDOException $e) {
    $resPDO =  "Connect Fail ... ".$e->getMessage();
  }
