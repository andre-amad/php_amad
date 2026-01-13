<?php

if (isset($_GET['name'])){
    $name = $_GET['name'];
}else {
    $name='no name';
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
    <h1> welcome <?= $name ?> have a nice year!</h1>
</body>

</html>