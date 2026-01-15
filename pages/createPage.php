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
    <form action="" method="POST">
        <label for ="">name</label>
        <input type="text" name="user_name">
        <label for ="">age</label>
          <input type="number" name="user_age">
           <label for ="">address</label>
     <input type="text" name="user_address">
        <button>sumbit</button>
    </form>

</body>


</html>