<?php
  //In this example, important values are stored in plaintext.
  //Don't do this in live production! Instead, these values are
  //usually stored as environmental variables some place safe.
  $dbname = "eg_demo";
  $dbuser = "demo-user";
  $dbpass = "21#Basic#Strong#Password#";

  //opens a new mysqli connection
  $mysqli = new mysqli("localhost", $dbuser, $dbpass, $dbname);

  /* check connection */
  if ($mysqli->connect_errno) {
    printf("<p class=\"error\">Connect failed: %s</p>",
$mysqli->connect_error);
    exit();

  }
  else {
    echo "<p class=\"success\">You're connected to the " . $dbname . "
database. Have a nice day </p>";

  }

?>
