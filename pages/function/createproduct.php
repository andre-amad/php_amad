<?php
include "../../config/includes.php";

if (isset($_POST['pod_name']) && isset($_POST['prod_quantity']) && isset($_POST['prod_tyoe'])&& isset
($_POST['prod_price']) && isset($_POST['prod_date_added'])) {
    $pod_name = $_POST['pod_name'];
    $prod_quantity = $_POST['prod_quantity'];
    $prod_tyoe = $_POST['prod_tyoe'];
    $prod_price = $_POST['prod_price'];
    $prod_date_added = $_POST['prod_date_added'];



    $sql = "INSERT INTO product (pod_name, prod_quantity, prod_tyoe, prod_price, prod_date_added)  
            VALUES (:pod_name, 
                    :prod_quantity,
                    :prod_tyoe,
                    :prod_price
                    :prod_date_added)";

    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "pod_name" => $pod_name,
        "prod_quantity" => $prod_quantity,
        "prod_tyoe" => $prod_tyoe,
         "prod_price" => $prod_price,
         "prod_date_added " => $prod_date_added

    ]);

    if ($stmnt) {
        echo "<script> window.location.href = '../dashbord.php'</script>";
    } else {
        echo "Not saved";
    }
}
