<?php

  $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

  if(mysqli_connect_errno($conn)){
    $result = "Connect Fail ... ".mysqli_connect_error();
  }else{
    $result = "MariaDB -> Connect!";
  }
  
  mysqli_close($conn);
