<?php
include "../../config/includes.php";

if (isset($_POST['user_id'])) {

    $name = $_POST['names'];
     $age = $_POST['age'];
    $address = $_POST['address'];
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $usertae = $_POST['user_id'];


    $result = updateUSer($usertae, $name, $age, $address, $username, $password);

    if($result){
        echo "<script> window.location.href='../retrievePage.php' </script>";
    }else{
        echo "<script> window.location.href='../viewPage.php?user_id'".$usertae." ' </script>";
    }
}else{
    echo "<script> window.location.href='../retrievePage.php' </script>";

}
?>