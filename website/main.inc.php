<?php
if (!isset($_SESSION['login'])) {
?>
  <h2>Log in to your Plant Care Account!</h2><br>
  <form name="login" action="index.php" method="post">
    <label>Email:</label>
    <input type="text" name="emailAddress" size="20">
   <!-- <br> -->
   <!-- <br> -->
    <label>Password:</label>
    <input type="password" name="password" size="20">
       <!-- <br> -->
   <!-- <br> -->
    <input type="submit" value="Login">
    <input type="hidden" name="content" value="validate">
  </form>
  <?php
} else {
   echo "<h2>Welcome {$_SESSION['firstName']} {$_SESSION['lastName']}, {$_SESSION['pronouns']} !</h2>";
?>
   <br><br>
   <p>Welcome to the website for all your Plant Care needs!</p>
   <p>Please proceed to see our current Plant Care stocks</p>
   <a href="index.php?content=logout"><strong>Logout</strong></a>
<?php
}
?>
