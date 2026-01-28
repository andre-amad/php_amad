<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";
?>

<body>
    <?php
    include "resources/navigators.php";
    ?>
    <h1>Create user </h1>
    <form action="function/createUser.php" method="POST">
        <label for="">name</label>
        <input type="text" name="user_name">
        <label for="">age</label>
        <input type="number" name="user_age">
        <label for="">address</label>
        <input type="text" name="user_address">
        <button>sumbit</button>
    </form>

    <h1>Create products </h1>
    <form action="function/createUser.php" method="POST">
        <label for="">pod name </label>
        <input type="text" name="pod_name">
        <label for="">prod quantity</label>
        <input type="number" name="prod_quantity">
        <label for="">prod tyoe</label>
        <input type="text" name="prod_tyoe">
        <label for="">prod price</label>
        <input type="number" name="prod_price">
        <label for="">prod date added</label>
        <input type="date" name="prod_date_added">
        <button>sumbit</button>
    </form>

</body>


</html>