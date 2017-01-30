<?php

  $connStr = "$PG_HOST $PG_USER $PG_PASS $PG_NAME $PG_PORT";
  $conn = pg_connect($connStr);

  if(!($conn)){
    $result = "Connect Fail ... ";
  }else{
    $result = "Postgres -> Connect!";
  }
  
  pg_close($conn);
