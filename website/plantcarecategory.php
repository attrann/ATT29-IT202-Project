<?php
require_once('database.php');
class Category
{
   public $categoryID;
   public $categoryCode;
   public $categoryName;
   public $categoryAisle;

   function __construct($categoryID, $categoryCode, $categoryName, $categoryAisle)
   {
       $this->categoryID = $categoryID;
       $this->categoryCode = $categoryCode;
       $this->categoryName = $categoryName;
       $this->categoryAisle = $categoryAisle;
   }
   function __toString()
   {
       $output = "<h2>Category Number: $this->categoryID</h2>\n" .
           "<h2>$this->categoryCode, $this->categoryName</h2>\n";
       return $output;
   }
   function saveCategory()
   {
       $db = getDB();
       $query = "INSERT INTO PlantCareCategories VALUES (?, ?, ?, ?, NOW())";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->categoryID,
           $this->categoryCode,
           $this->categoryName,
           $this->categoryAisle,
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM PlantCareCategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $categories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['PlantCareCategoryID'],
                   $row['PlantCareCategoryCode'],
                   $row['PlantCareCategoryName'],
                   $row['PlantCareAisle']
               );
               array_push($categories, $category);
               unset($category);
           }
           $db->close();
           return $categories;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findCategory($categoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM PlantCareCategories WHERE PlantCareCategoryID = $categoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
            $row['PlantCareCategoryID'],
            $row['PlantCareCategoryCode'],
            $row['PlantCareCategoryName'],
            $row['PlantCareAisle']
           );
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCategory()
   {
       $db = getDB();
       $query = "UPDATE PlantCareCategories SET PlantCareCategoryID = ?, PlantCareCategoryCode = ?, " .
           "PlantCareCategoryName = ? " .
           "WHERE PlantCareCategoryID = $this->categoryID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "iss",
           $this->categoryID,
           $this->categoryCode,
           $this->categoryName
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM PlantCareCategories WHERE PlantCareCategoryID = $this->categoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

}
?>


