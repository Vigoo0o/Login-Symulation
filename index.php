<?php

  session_start();


  if($_SERVER['REQUEST_METHOD'] === "POST") {
    if($_POST["user"] === "Tarek") {
      $_SESSION["username"] = "Vigo";
      $_SESSION["id"] = 1;
    }
  }

  // echo "<pre>";
  // print_r($_SESSION);
  // echo "</pre>";

  if(isset($_SESSION["username"])) {
    echo "Welcom ". $_SESSION["username"] . "<br>";
    echo '<a href="logout.php">Logout</a>';
  } else {

?>

<form action="" method="POST">
  <input type="text" name="user" placeholder="Enter Username">
  <input type="submit" value="Login">
</form>

<?php } ?>

