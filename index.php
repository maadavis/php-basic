<div>
  <h2>Have we DB?</h2>
  <?php include "config.php" ?>
  <hr>
</div>

<div>
  <h2>Display All Entries</h2>
  <ul>
    <?php
      $con = new mysqli("localhost", $dbuser, $dbpass, $dbname);
      $call = "SELECT make, model, year FROM cars";
      $answer = $con->query($call);
      while ($line = $answer->fetch_array(MYSQLI_ASSOC)) {
        echo "<li><strong>" . $line["make"] . " " . $line["model"] .
"</strong> (" . $line["year"] . ")" . ". </li>";
      }
      $con -> close();
    ?>
  </ul>
  <hr />
</div>
