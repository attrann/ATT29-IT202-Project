<?php
// error_log("\$_GET " . print_r($_GET, true));
// include("category.php");
if (isset($_SESSION['login'])) {
   if (!isset($_REQUEST['categoryID']) or (!is_numeric($_REQUEST['categoryID']))) {
      ?>
             <h2>You did not select a valid categoryID to delete.</h2>
             <a href="index.php?content=listcategories">List Categories</a>
      <?php
       } else {
$categoryID = $_POST['categoryID'];
$category = Category::findCategory($categoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $categoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $categoryID</h2>\n";
       }
} else {
   echo "<H2>Please login first</h2>\n";
}

?>

