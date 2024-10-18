<?php
include("plantcarecategory.php");
$categoryID = $_GET['PlantCareCategoryID'];
if ((trim($categoryID) == '') or (!is_numeric($categoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $categoryCode = $_GET['PlantCareCategoryCode'];
  $categoryName = $_GET['PlantCareCategoryName'];
  $categoryAisle = $_GET['PlantCareAisle'];
  $category = new Category($categoryID, $categoryCode, $categoryName, $categoryAisle);
  $result = $category->saveCategory();
  if ($result) {
      echo "<h2>New Category #$categoryID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>

