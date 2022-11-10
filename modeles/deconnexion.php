<?php

include_once "../controllers/f2.php";
init_php_session();
  session_destroy();
  header("location:../views/pageConnexion.php");
  ?>

