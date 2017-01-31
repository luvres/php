<?php

  # Postgres
  //$PG_HOST = "host=localhost";
  //$PG_HOST = "host=169.8.192.130";
  //$DB_HOST = "host=izone.changeip.org";
  $HOST = "postgres-host";
  $USER = "postgres";
  $PASS = "postgres";
  $PORT = "5432";
  $PG_HOST = "host=$HOST";
  $PG_USER = "user=$USER";
  $PG_PASS = "password=$PASS";
  $PG_NAME = "dbname=postgres";
  $PG_PORT = "port=$PORT";

  try {

    $PDO = new PDO("pgsql:$PG_NAME;$PG_HOST;$PG_PORT", $USER, $PASS);
    $resPDO = "Postgres (PDO) -> Connect!";

  } catch (PDOException $e) {
      $resPDO = "Connect Fail ... ".$e->getMessage();
  }
