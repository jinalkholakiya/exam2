<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functoin_with_returnvalue</title>
</head>
<body>
    <?php
//1. OUTPUT:- 
//hello zinal jinal .
         // $a =10;
         // $b =20;
         // function abc($a="first" ,$b="last")
         // {
         //    echo "hello  $a $b .<br>";
         // }
        
         // abc("zinal","jinal");        
  
//2.OUTPUT:-
//hello jin jinal .gm
//hello jin jinal
         //    function abc($a="first" ,$b="last")
         //    {
         // echo "hello  $a $b .gm<br>";
         //    $j = "$a $b";
         //    return $j;
         //    }

         //    $jj = abc("jin","jinal");  
         //    echo " hello $jj";

//3.OUTPUT:-
//per = 77
//Total = 231
            function sum($math,$eng,$sci)
             {
                $jj = $math + $eng + $sci;
                return $jj;
                
             }
             function per($st)
             {
                $per = $st / 3;
                echo "per = " . $per;
                echo "<br>";
             }
             $total = sum(55,77,99);
            per($total);
            echo "Total = " . $total;
    ?>
</body>
</html>