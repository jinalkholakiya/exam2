<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested_loop</title>
</head>
<body>
    <?php
//1.) aa loop ma 1 to 10 n print karse....    
        for($a =1; $a<=100 ;$a = $a + 10)
        {
            for($b = $a; $b < $a + 10; $b++)
            {
                echo $b . "   ";

            }
                 echo  "<br>";
        }
    
//2.)[[continue;]] statement no use thi loop ma 3 n print ny kari.....
// output:-
//1245678910
        // for($a =1; $a<=10 ;$a++)
        // {
        //     if($a == 3){
        //     continue;
        //     }
        //     echo $a . "<br>" ;
        // }
  
//3.) [[break;]] aa statement no use kari n aapde loop n atlavi sakeye cheye.....
// output :-
//1
//2
        // for($a =1; $a<=10 ;$a++)
        //     {
        //             if($a == 3){
        //             break;
        //             }
        //             echo $a . "<br>" ;
        //       }
    ?>
</body>
</html>