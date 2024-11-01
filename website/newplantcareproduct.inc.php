<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="itemID" size="4"></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="itemCode" size="4"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="itemName" size="20"></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="itemDesc" size="10"></td>
       </tr>
       <tr>
           <td>Product Color:</td>
           <td><input type="text" name="itemColor" size="4"></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="categoryID" size="4"></td>
       </tr>
       <tr>
           <td>WholeSale Price:</td>
           <td><input type="text" name="wholesalePrice" size="10"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="listPrice" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addplantproduct">
</form>
