<?php
include "../config/includes.php";

if (isset($_GET['prod_id'])) {
    $prod_id = $_GET['prod_id'];

    $getProd =  getProduct($prod_id);
} else {
    echo "<script> window.location.href='retrievePage.php' </script";
}

?>


<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";
?>

<body>
    <?php
    include "resources/navigators.php";
    ?>

      <form action="function/updateproduct.php" method="POST">
    <label for="pod_name">Product Name</label>
    <input name="pod_name" type="text" value="<?= $getProd[0]['pod_name'] ?>">

    <label for="prod_quantity">Quantity</label>
    <input name="prod_quantity" type="number" value="<?= $getProd[0]['prod_quantity'] ?>">

    <label for="prod_tyoe">Product Type</label>
    <input name="prod_tyoe" type="text" value="<?= $getProd[0]['prod_tyoe'] ?>">

    <label for="prod_price">Price</label>
    <input name="prod_price" type="number" step="0.01" value="<?= $getProd[0]['prod_price'] ?>">

    <label for="prod_date_added">Date Added</label>
    <input name="prod_date_added" type="date" value="<?= $getProd[0]['prod_date_added'] ?>">

    <input type="hidden" name="prod_id" value="<?= $getProd[0]['prod_id'] ?>">


    <input type="text" name="prod_id" value="<?= $getUser[0]['prod_id'] ?>"hidden>

    <button>Edit</button>
</form>


</body>