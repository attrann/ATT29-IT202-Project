<?php
include("plantcareproduct.php");
$itemID = $_GET['PlantCareProductID'];
$item = Item::findItem($itemID);
$result = $item->removeItem();
if ($result)
   echo "<h2>Product $itemID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing product $itemID</h2>\n";
?>

