<?php

session_start();
//print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
<body>
    <?php
       if(isset($_SESSION["favcolor"])){
        echo "favrite color :" . $_SESSION["favcolor"];
       }
     
    ?>
   
</body>
</html>