<?php

  # MySQl (MariaDB)
  $DB_HOST = "mariadb-host";
  $DB_USER = "root";
  $DB_PASS = "maria";
  $DB_NAME = "mysql";
  $DB_PORT = "3306";

  try {
    $PDO = new PDO( 'mysql:host='.$DB_HOST.
                    ';port='.$DB_PORT.
                    ';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
    $resPDO =  "MariaDB (PDO) -> Connect!";

  } catch (PDOException $e) {
    $resPDO =  "Connect Fail ... ".$e->getMessage();
  }
