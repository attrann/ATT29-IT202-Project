<?php
include("plantcareproduct.php");
$itemID = $_GET['PlantCareProductID'];
$item = Item::findItem($itemID);
$item->itemID = $_GET['PlantCareProductID'];
$item->itemName = $_GET['PlantCareProductName'];
$item->categoryID = $_GET['PlantCareCategoryID'];
$item->listPrice = $_GET['PlantCareListPrice'];
$result = $item->updateItem();
if ($result) {
   echo "<h2>Product $itemID updated</h2>\n";
} else {
   echo "<h2>Problem updating Product $itemID</h2>\n";
}
?>

