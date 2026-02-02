<?php
include "../config/includes.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $getUser = getUser($user_id);
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

</body>