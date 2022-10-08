<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function_argument_by_reference</title>
</head>
<body>
    <?php
//1.)    
        //  function abc(&$name)
        // {
        //     $name .= "jinal";
        // }
        // $str = "hello how are you ??? <br>";
        // abc($str);
        // echo $str;

//2.)        
         function first($num)
       {
            $num += 5;
       }
         function second(&$num)
       {
        $num += 10;
       }
       $number =10;
       first($number);
       echo "<b>original value is $number<br></b>";
       second($number);
       echo "original value is $number<br>";
?>
</body>
</html>