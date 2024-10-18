<?php
include('plantcareproduct.php');
$itemID = $_GET['PlantCareProductID'];
if ((trim($itemID) == '') or (!is_numeric($itemID))) {
   echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
    $itemID = $_GET['PlantCareProductID'];
    $itemCode = $_GET['PlantCareProductCode'];
   $itemName = $_GET['PlantCareProductName'];
   $itemDesc = $_GET['PlantCareDescription'];
   $categoryID = $_GET['PlantCareCategoryID'];
   $itemColor = $_GET['PlantCareColor'];
   $wholesalePrice = $_GET['PlantCareWholesalePrice'];
   $listPrice = $_GET['PlantCareListPrice'];
   $item = new Item(
    $itemID,
    $itemCode,
    $itemName,
    $itemDesc,
    $categoryID,
    $itemColor,
    $wholesalePrice,
    $listPrice
   );
   $result = $item->saveItem();
   if ($result)
       echo "<h2>New Product #$itemID successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that product</h2>\n";
}
?>

