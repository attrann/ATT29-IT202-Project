<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="number" name="itemID" size="4"minlength ="3" maxlength = "10" required></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="itemCode" size="4"minlength ="3" maxlength = "10" required></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="itemName" size="20" minlength ="2" maxlength = "100" required></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="itemDesc" size="10"minlength ="5" maxlength ="255" required></td>
       </tr>
       <tr>
           <td>Product Color:</td>
           <td><input type="text" name="itemColor" size="4"minlength ="3" maxlength ="200" required></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="categoryID" size="4" minlength ="3" maxlength =  "10" required></td>
       </tr>
       <tr>
           <td>WholeSale Price:</td>
           <td><input type="number" name="wholesalePrice" size="10" minlength ="3" maxlength = "1000" step = "0.01" required></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="listPrice" size="10" minlength ="3" maxlength = "1000" step = "0.01" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addplantproduct">
</form>
