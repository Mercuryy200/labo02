<?php
require_once 'productMVC/ProductController.php';
require_once 'productMVC/ProductView.php';

$database = new PDO('mysql:host=localhost;dbname=product', 'root', '1234');
$productController = new productController($database);
$productView = new productView();
require "header.php";
?>
<h2 class="pageTitle">Catalogue des produits</h2>
<div class="filter">
    <div class="filter"><i class="fa-solid fa-filter"></i> Filters</div>
</div>
<div class="products">
    <?php
    $chemises = $productController->getAllChemises();
    $productView->displayChemises($chemises);
    ?>
    <?php
    $chemises = $productController->getAllCravattes();
    $productView->displayCravattes($chemises);
    ?>

</div>

<?php
require "footer.php";
?>
