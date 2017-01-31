<?php

  # Postgres
  $HOST = "postgres-host";
  $USER = "postgres";
  $PASS = "postgres";
  $PORT = "5432";
  $PG_HOST = "host=$HOST";
  $PG_USER = "user=$USER";
  $PG_PASS = "password=$PASS";
  $PG_NAME = "dbname=postgres";
  $PG_PORT = "port=$PORT";

  $conn = @pg_connect("$PG_HOST $PG_USER $PG_PASS $PG_NAME $PG_PORT");

  if($conn){
    $result = "Postgres (conn) -> Connect!";
  }else{
    $result = "Connect Fail ... ";
  }
