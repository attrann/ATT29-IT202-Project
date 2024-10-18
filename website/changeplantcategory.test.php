<?php
include("plantcarecategory.php");
$categoryID = $_GET['PlantCareCategoryID'];
$category = Category::findCategory($categoryID);
$category->categoryID = $_GET['PlantCareCategoryID'];
$category->categoryCode = $_GET['PlantCareCategoryCode'];
$category->categoryName = $_GET['PlantCareCategoryName'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $categoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $categoryID</h2>\n";
}
?>

