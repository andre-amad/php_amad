<?php
$list = ['alea','iya', 'marchel','chaff','latreel', 'andre',];
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
    <h1> This is retrieve  page</h1>

    <?php
    foreach($list as $item){
     ?>   

    <li> <?= $item?> </li>

<?php
    }
?>
</ul>
<table>
  <tr>
      <th>Name</th>
      <th>Action</th>     
</tr>


<?php
    foreach($list as $item){
     ?>   

          <tr>
            <td><?=  $item?> </td>
            <td><button>view</button></td>
          </tr>
<?php
    }
?>
</table>


</body>


</html>