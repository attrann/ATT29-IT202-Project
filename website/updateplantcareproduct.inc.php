<?php
if (!isset($_POST['itemID']) or (!is_numeric($_POST['itemID']))) {
?>
   <h2>You did not select a valid itemID value</h2>
   <a href="index.php?content=listplantproducts">List items</a>
   <?php
} else {
   $itemID = $_POST['itemID'];
   $item = Item::findItem($itemID);
   if ($item) {
   ?>
       <h2>Update Item <?php echo $item->itemID; ?></h2><br>
       <form name="items" action="index.php" method="post">
           <table>
               <tr>
                   <td>ProductID</td>
                   <td><?php echo $item->itemID; ?></td>
               </tr>
               <td>Product Code</td>
                   <td><input type="text" name="itemCode" value="<?php echo $item->itemCode; ?>"></td>
               </tr>
               <tr>
               <td>Name</td>
                   <td><input type="text" name="itemName" value="<?php echo $item->itemName; ?>"></td>
               </tr>
               <td>Description</td>
                   <td><input type="text" name="itemDesc" value="<?php echo $item->itemDesc; ?>"></td>
               </tr>
               <td>Product Color</td>
                   <td><input type="text" name="itemColor" value="<?php echo $item->itemColor; ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
               <td><input type="text" name="categoryID" value="<?php echo $item->categoryID; ?>"></td>
               </tr>
               <tr>
                   <td>WholeSale Price</td>
                 <td><input type="text" name="wholesalePrice" value="<?php echo $item->wholesalePrice; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                 <td><input type="text" name="listPrice" value="<?php echo $item->listPrice; ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Item">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="itemID" value="<?php echo $itemID; ?>">
           <input type="hidden" name="content" value="changeplantproduct">
       </form>
   <?php
      } else {
        ?>
            <h2>Sorry, item <?php echo $itemID; ?> not found</h2>
            <a href="index.php?content=listplantproducts">List items</a>
     <?php
        }
     }
     ?>
     