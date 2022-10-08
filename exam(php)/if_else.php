<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if_else</title>
</head>
<body>
    <?php
//1. a ni value nani che to ((a is smaller)) aavi u 
        //  $a = 15;
       
        // if($a > 30 ){
        //     echo "A is greater";
        // }
        // else{
        //     echo "A is smaller";
        // }
//2.  a ni value moti che to ((a is greater)) aavi u 
        // $a = 35;
     
        // if($a > 30 ){
        //     echo "A is greater";
        // }
        // else{
        //     echo "A is smaller";
        // }
//3. a ni value both side sem che.
        //  $a = 15;
       
        // if($a == 15){
        //     echo "<h1>A is same</h1>";
        // }
        // else{
        //     echo "<h1>A is not same</h1>";
        // }
//4 a ni value both side diffrent che.
        // $a = 15;
            
        // if($a != 15){
        //     echo "<h1>A is same</h1>";
        // }
        // else{
        //     echo "<h1>A is not same</h1>";
        // }
//5  a ni value same che but data_type diffrent che .
            // $a = 15;
                
            // if($a === "15"){
            //     echo "<h1>A is same</h1>";
            // }
            // else{
            //     echo "<h1>A is not same</h1>";
            // } 
//6           
            $a = "jinal";
            $b = "female";

            if($b == "male"){
              echo "hello mr.".$a;
            }
            else{
                echo "hello miss.".$a ;
            }          
    ?>
</body>
</html>