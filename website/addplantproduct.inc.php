<?php
// include('item.php');
if (isset($_SESSION['login'])) {
    $itemID = filter_input(INPUT_POST, 'itemID', FILTER_VALIDATE_INT);
if ((trim($itemID) == '') or (!is_int($itemID))) {
   echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
    $itemCode = $_POST['itemCode'];
   $itemName = $_POST['itemName'];
   $itemDesc = $_POST['itemDesc'];
   $categoryID = $_POST['categoryID'];
   $itemColor = $_POST['itemColor'];
   $wholesalePrice = $_POST['wholesalePrice'];
   $listPrice = $_POST['listPrice'];
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
} else {
    echo "<h2>Please login first</h2>\n";
 }
 
?>

