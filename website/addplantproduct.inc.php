<?php
// include('item.php');
if (isset($_SESSION['login'])) {
    $itemID = filter_input(INPUT_POST, 'itemID', FILTER_VALIDATE_INT);
if ((trim($itemID) == '') or (!is_int($itemID))) {
   echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
    $itemCode = htmlspecialchars($_POST['itemCode']);
   $itemName = htmlspecialchars($_POST['itemName']);
   $itemDesc = htmlspecialchars($_POST['itemDesc']);
   $categoryID =htmlspecialchars ($_POST['categoryID']);
   $itemColor = htmlspecialchars($_POST['itemColor']);
   $wholesalePrice = htmlspecialchars($_POST['wholesalePrice']);
   $listPrice = htmlspecialchars($_POST['listPrice']);
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

