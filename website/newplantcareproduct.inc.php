<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="number" name="itemID" size="4"min ="3" max = "10" required></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="number" name="itemCode" size="4"min ="3" max = "10" required></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="itemName" size="20"min ="10" max = "100" required></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="itemDesc" size="10"min ="100" max ="255" required></td>
       </tr>
       <tr>
           <td>Product Color:</td>
           <td><input type="text" name="itemColor" size="4"min ="100" max ="200" required></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="number" name="categoryID" size="4" min ="3" max =  "10" required></td>
       </tr>
       <tr>
           <td>WholeSale Price:</td>
           <td><input type="number" name="wholesalePrice" size="10" min ="3" max = "1000" step = "0.01" required></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="listPrice" size="10" min ="3" max = "1000" step = "0.01" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addplantproduct">
</form>
