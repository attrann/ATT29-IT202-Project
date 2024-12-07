<script language="javascript">
   function listbox_dblclick() {
       document.items.updateitem.click()
   }


   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this item?");
       }
       if (userConfirmed) {
           if (target == 1) items.action = "index.php?content=removeplantproduct";
           if (target == 2) items.action = "index.php?content=updateplantproduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>
<h2>Select Item</h2>
<form name="products" method="post">
   <select ondblclick="listbox_dblclick()" name="productID" size="15" style="width:1000px;">
<?php
// include("plantcareproduct.php");
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
   echo "<option value=\"$itemID\">$option</option>\n";
}
?>
   </select>
   <br>
   <input type="submit" onClick="button_click(1)" name="deleteitem" value="Delete Item">
   <input type="submit" onClick="button_click(2)" name="updateitem" value="Update Item">
</form>

