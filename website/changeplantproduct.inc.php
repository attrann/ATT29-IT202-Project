<?php
// include("plantcareproduct.php");
if (isset($_SESSION['login'])) {
   $itemID = $_POST['itemID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Item") {
$item = Item::findItem($itemID);
$item->itemID = $_POST['itemID'];
$item->itemCode = $_POST['itemCode'];
$item->itemName = $_POST['itemName'];
$item->itemDesc = $_POST['itemDesc'];
$item->itemColor = $_POST['itemColor'];
$item->categoryID = $_POST['categoryID'];
$item->wholesalePrice = $_POST['wholesalePrice'];
$item->listPrice = $_POST['listPrice'];
$result = $item->updateItem();
if ($result) {
   echo "<h2>Product $itemID updated</h2>\n";
} else {
   echo "<h2>Problem updating Product $itemID</h2>\n";
   }
} else {
    echo "<h2>Update Canceled for item $itemID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>

