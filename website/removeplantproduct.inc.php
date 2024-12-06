<?php
if (isset($_SESSION['login'])) {
// include("plantcareproduct.php");
$itemID = $_POST['PlantCareProductID'];
$item = Item::findItem($itemID);
$result = $item->removeItem();
if ($result)
   echo "<h2>Product $itemID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing product $itemID</h2>\n";
} else {
   echo "<h2>Please login first</h2>\n";
}
?>

