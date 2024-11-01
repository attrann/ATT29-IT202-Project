<?php
session_start();
include("plantcarecategory.php");
include("plantcareproduct.php");
?>
<!DOCTYPE html>
<html>
<head>
   <title>Product Helper</title>
</head>
<body>
   <header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 425px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>

