<?php
include "../config/includes.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $getUser =  getUserById($user_id);
} else {
    echo "<script> window.location.href='retrievePage.php' </script";
}

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

    <h1>names: <?= $getUser[0] ['names'] ?></h1>
    <h1>age: <?= $getUser[0] ['age'] ?></h1>
    <h1>address: <?= $getUser[0] ['address'] ?></h1>
    <h1>username: <?= $getUser[0] ['username'] ?></h1>

    <a href="">Edit</a>

    <h1>pod_name: <?= $getProd[0]['pod_name'] ?></h1>
    <h1>prod_quantity: <?= $getProd[0]['prod_quantity'] ?></h1>
    <h1>prod_type: <?= $getProd[0]['prod_tyoe'] ?></h1>
    <h1>prod_price: <?= $getProd[0]['prod_price'] ?></h1>
    <h1>prod_date_added: <?= $getProd[0]['prod_date_added'] ?></h1>

    <a href="">Edit</a>


</body>