<?php
include("plantcareproduct.php");
$items = Item::getItems();
foreach ($items as $item) {
   $itemID = $item -> itemID;
   $itemCode = $item -> itemCode;
   $itemName = $item -> itemName;
   $itemDesc = $item -> itemDesc;
   $categoryID = $item -> categoryID;
   $itemColor = $item -> itemColor;
   $wholesalePrice = $item -> wholesalePrice;
   $listPrice = $item -> listPrice;
   $option = $itemID . " - " . $itemCode .  " - " . $itemName . " - " . $itemDesc .  " - " . 
   $categoryID . " - " . $itemColor .  " - " . $wholesalePrice . " - " . $listPrice;
   echo "$option<br>";
}
?>
