<?php
require_once('database.php');
class Item
{
   public $itemID;
   public $itemCode;
   public $itemName;
   public $itemDesc;
   public $categoryID;
   public $itemColor;
   public $wholesalePrice;
   public $listPrice;
   function __construct(
        $itemID,
        $itemCode,
        $itemName,
        $itemDesc,
        $categoryID,
        $itemColor,
        $wholesalePrice,
        $listPrice
       ) {
       $this->itemID = $itemID;
       $this->itemCode = $itemCode;
       $this->itemDesc = $itemDesc;
       $this->itemColor = $itemColor;
       $this->wholesalePrice = $wholesalePrice;
       $this->itemName = $itemName;
       $this->categoryID = $categoryID;
       $this->listPrice = $listPrice;
   }
   function __toString()
   {
       $output = "<h2>Product : $this->itemID</h2>" .
           "<h2>Name: $this->itemName</h2>\n";
       "<h2>Category ID: $this->categoryID at $this->listPrice</h2>\n";
       return $output;
   }
   function saveItem()
   {
       $db = getDB();
       $query = "INSERT INTO PlantCareProducts VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issssidd",
            $this->itemID,
            $this->itemCode,
            $this->itemName,
            $this->itemDesc,
            $this->itemColor,
            $this->categoryID,
            $this->wholesalePrice,
            $this->listPrice  
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getItems()
   {
       $db = getDB();
       $query = "SELECT * FROM PlantCareProducts";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $items = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $item = new Item(
                   $row['PlantCareProductID'],
                   $row['PlantCareProductCode'],
                   $row['PlantCareProductName'],
                   $row['PlantCareDescription'],
                   $row['PlantCareColor'],
                   $row['PlantCareCategoryID'],
                   $row['PlantCareWholesalePrice'],
                   $row['PlantCareListPrice']
               );
               array_push($items, $item);
           }
           $db->close();
           return $items;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findItem($itemID)
   {
       $db = getDB();
       $query = "SELECT * FROM PlantCareProducts WHERE PlantCareProductID = $itemID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $item = new Item(
            $row['PlantCareProductID'],
            $row['PlantCareProductCode'],
            $row['PlantCareProductName'],
            $row['PlantCareDescription'],
            $row['PlantCareCategoryID'],
            $row['PlantCareColor'],
            $row['PlantCareWholesalePrice'],
            $row['PlantCareListPrice']
           );
           $db->close();
           return $item;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateItem()
   {
       $db = getDB();
       $query = "UPDATE PlantCareProducts SET PlantCareProductName= ?, " .
           "PlantCareCategoryID= ?, PlantCareListPrice= ? WHERE PlantCareProductID = $this->itemID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "sid",
           $this->itemName,
           $this->categoryID,
           $this->listPrice
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeItem()
   {
       $db = getDB();
       $query = "DELETE FROM PlantCareProducts WHERE PlantCareProductID = $this->itemID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

}
?>
