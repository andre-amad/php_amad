<?php
function retrieveAlluser(){
include "connection.php";

      $sql = "SELECT * FROM user";
    $stmnt = $conn -> prepare($sql);
     $stmnt->execute();


     return $stmnt->fetchAll(PDO::FETCH_ASSOC);

}

function loginAuth($usernames, $passwords){

include "connection.php";

    $sql = "SELECT * FROM user  WHERE username = :username AND password = :password";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "username" => $usernames,
        "password" => $passwords
    
    ]);

     $count = $stmnt -> rowCount();

     return $count;

}
function getUserById($user_id)
{
    include "connection.php";
    
    $sql = "SELECT * FROM user  WHERE user_id = :id";
    $stmnt = $conn->prepare($sql); 
      $stmnt->execute([
        "id" => $user_id

      ]);
      return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserByPod($pod_id)
{
    include "connection.php";
    
    $sql = "SELECT * FROM user  WHERE user_id = :id";
    $stmnt = $conn->prepare($sql); 
      $stmnt->execute([
        "id" => $pod_id

      ]);
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
    echo $row['name'];
    echo $row['age'];
    echo $row['address'];
    echo $row['user_name'];

  

  }
?>