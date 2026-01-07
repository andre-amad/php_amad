<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>login</h1>
    <div class="logincard">
        <form action="function/loginfunction.php" method="POST">
            <label for="username">Username</label><br>
            <input type="text" id="username" class="username" name="username"><br>
            <label for="password">password</label><br>
            <input type="password" id="password" class="password" name="password"> <br>
            <button type="sumbit">Andre</button> <br>
        </form>
    </div>

    <?php
    $name = "Andre";
    $nums = "1";
    $num  =  1;

    echo ("hello word/nt" . $name);
    echo ($num + $nums);

    var_dump($nums);
    var_dump($num);




    ?>



</body>

</html>