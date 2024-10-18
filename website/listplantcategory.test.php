<?php
include("plantcarecategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $categoryID = $category->categoryID;
   $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName;
   echo "$name<br>";
}
?>

