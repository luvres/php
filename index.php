<?php

  // MySQl (MariaDB)
  $DB_HOST = "169.8.192.130";
  //$DB_HOST = "izone.changeip.org";
  //$DB_HOST = "mariadb-host";
  $DB_USER = "root";
  $DB_PASS = "maria";
  $DB_NAME = "dbzone";
  $DB_PORT = "3306";  

  // Postgres
  $PG_HOST = "host=169.8.192.130";
  //$DB_HOST = "host=izone.changeip.org";  
  //$DB_HOST = "host=postgres-host";
  $PG_USER = "user=postgres";
  $PG_PASS = "password=postgres";
  $PG_NAME = "dbname=dbzone";
  $PG_PORT = "port=5432";
  
	
  $r = $_GET['r'];
  
  require_once($r."/index.php");
