<?php
include "../../config/includes.php";

if (isset($_POST['prod_id'])) {

    $pod_name= $_POST['pod_name'];
     $prod_quantity = $_POST['prod_quantity'];
    $prod_tyoe = $_POST['prod_tyoe'];
    $prod_price = $_POST['prod_price'];
    $prod_date_added = $_POST['prod_date_added'];
    $usereu = $_POST['prod_id'];


    $result = updateUSer($usereu, $pod_name, $prod_quantity, $prod_tyoe, $prod_price, $prod_date_added);

    if($result){
        echo "<script> window.location.href='../retrievePage.php' </script>";
    }else{
        echo "<script> window.location.href='../viewPage.php?user_id'".$usereu." ' </script>";
    }
}else{
    echo "<script> window.location.href='../retrievePage.php' </script>";

}
?>