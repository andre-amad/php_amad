<?php
include "../config/includes.php";
$list = retrieveAlluser();
$prod = retrieveAllProducts();

// echo json_encode($list);

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
    <h1> This is retrieve page</h1>


    <table>
        <tr>
            <th>name</th>
            <th>age</th>
            <th>address</th>
            <th>user name</th>
            <th>Action</th>

        </tr>


        <?php
        foreach ($list as $item) {
        ?>

        <tr>
            <td><?= $item["names"] ?> </td>
            <td><?= $item["age"] ?> </td>
            <td><?= $item["address"] ?> </td>
            <td><?= $item["username"] ?> </td>
            <td><a href="viewpages.php?user_id=<?= $item['user_id'] ?>">view</a></td>
        </tr>
        <?php
            }
            ?>

        <table>
            <tr>
                <th>name</th>
                <th>age</th>
                <th>address</th>
                <th>user name</th>
                <th>Action</th>

            </tr>
       <?php
            
            ?>

            <?php
            foreach ($prod as $prods) {
            ?>

                <tr>
                    <td><?= $prods["pod_name"] ?> </td>
                    <td><?= $prods["prod_quantity"] ?> </td>
                    <td><?= $prods["prod_tyoe"] ?> </td>
                    <td><?= $prods["prod_price"] ?> </td>
                    <td><?= $prods["prod_date_added"] ?> </td>
                    <td><a href="viewpages.php?prod_id=<?= $prods['prod_id'] ?>">view</a></td>
                </tr>
            <?php
            }
            ?>
        </table>


</body>


</html>