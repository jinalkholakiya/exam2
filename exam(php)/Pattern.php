<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern</title>
</head>
<body>
    <?php
         for($i =1; $i<=5; $i++)
         {
            for($j =0; $j<$i; $j++)
            {
                echo  " $i ";
            }
           echo "<br>";
         }
        
         for($i = 1; $i <= 5; $i++)
         {
            for($j = 1; $j < $i; $j++)
            {
                echo  " $i ";
            }
           echo "<br>";
         }
    ?>

<?php
         for($i =1; $i<=5; $i++)
         {
            for($j =0; $j<$i; $j++)
            {
                echo  " * ";
            }
           echo "<br>";
         }
    ?>

<?php
         for($i =1; $i<=5; $i++)
         {
            for($j =1; $j<=$i; $j++)
            {
                echo  " $j ";
            }
           echo "<br>";
         }
    ?>
     <?php
         for($i = 1; $i <= 5; $i++)
         {
            for($j = 1; $j < $i; $j++)
            {
                echo  " $i ";
            }
           echo "<br>";
         }
    ?>
</body>
</html>

