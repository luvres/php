<?php

  require("conn/postgres.php");
  require("pdo/postgres.php");

  @pg_close($conn);
