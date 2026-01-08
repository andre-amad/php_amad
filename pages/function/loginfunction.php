<?php

if( isset($_POST['username']) && isset($_POST['password']) ){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $my_uname ="admin";
    $my_pass = "admin123";
    $user_name = "Andre L Amad  gian mark ray tagalog ";

    if($username == $my_uname && $password == $my_pass){         
     echo "<script> window.location.href = '../dashbord.php?name=". $user_name."'</script>";
    }else{

 echo "<script> window.location.href = '../login.php?status=false'</script>";

}  
}        



?>