<?php


function retrieveAlluser()
{
  include "connection.php";

  $sql = "SELECT * FROM user";
  $stmnt = $conn->prepare($sql);
  $stmnt->execute();


  return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function retrieveAllproducts()
{
  include "connection.php";

  $sql = "SELECT * FROM products";
  $stmnt = $conn->prepare($sql);
  $stmnt->execute();


  return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function loginAuth($usernames, $passwords)
{

  include "connection.php";

  $sql = "SELECT * FROM user  WHERE username = :username AND password = :password";
  $stmnt = $conn->prepare($sql);
  $stmnt->execute([
    "username" => $usernames,
    "password" => $passwords

  ]);

  $count = $stmnt->rowCount();

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

function getProduct($prod_id)
{
  include "connection.php";

  $sql = "SELECT * FROM products WHERE prod_id = :id";
  $stmnt = $conn->prepare($sql);
  $stmnt->execute([
    "id" => $prod_id
  ]);
  return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}



function updateUser($usertae, $name, $age, $address, $usernames, $passwords)
{
  include "connection.php";             

  $sql = "UPDATE user SET names= :name, age= :age, address= :address, username= :usernames, password= :password WHERE user_id =:user_id ";
  $stmnt = $conn->prepare($sql);
  $stmnt->execute([
    "name" => $name,
    "age" => $age,
    "address" => $address,
    "usernames" => $usernames,
    "password" => $passwords,
    "user_id" => $usertae

  ]);
  return $stmnt;
}

function updateproduct($usereu, $pod_name, $prod_quantity, $prod_tyoe, $prod_price, $prod_date_added)
{
  include "connection.php";             

  $sql = "UPDATE user SET pod_name= :pod_name, prod_quantity= : prod_quantity, prod_tyoe= : prod_tyoe, prod_price= :prod_price, prod_date_added= :prod_date_added prod_id =:prod_id ";
  $stmnt = $conn->prepare($sql);
  $stmnt->execute([
    "pod_name" => $pod_name,
    "prod_quantity" => $prod_quantity,
    "prod_tyoe" => $prod_tyoe,
    "prod_price" => $prod_price,
    "prod_date_added" => $prod_date_added,
    "prod_id" => $usereu

  ]);
  return $stmnt;
}
?>