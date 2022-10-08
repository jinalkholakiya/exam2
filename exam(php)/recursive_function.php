<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive_Function</title>
</head>
<body>
    <?php

//1.)  recursive function.....
//output:-
//12345
        //  function abc($number)
        //  {
        //      if($number <= 5)
        //      {
        //         echo $number;
        //         abc($number + 1);
        //      }
        //  }
        //  abc(1);

//2.)
         function factorial($n) {
                     if($n == 0) {
                       return 1;
                     }
                     else{
                        return($n * factorial($n - 1));
                     }
                 }
                 echo factorial(3);
    ?>
</body>
</html>