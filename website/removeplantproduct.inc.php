<?php
if (isset($_SESSION['login'])) {
   if (!isset($_POST['itemID']) or (!is_numeric($_POST['itemID']))) {
      ?>
             <h2>You did not select a valid itemID to delete.</h2>
             <a href="index.php?content=listitems">List items</a>
      <?php
       } else {
$itemID = $POST['itemID'];
$item = Item::findItem($itemID);
$result = $item->removeItem();
if ($result)
   echo "<h2>Product $itemID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing product $itemID</h2>\n";
       }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>

