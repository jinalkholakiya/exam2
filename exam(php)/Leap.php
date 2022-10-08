
 <title>leap</title>
 <!-- <?php
$i = 2024;
if($i % 4 == 0)
{
        echo "leap year : ";
        echo "<br>";
    }
    else{
        echo "not leap year  :  ";
     
        echo "<br>";
    }
    
?> -->

<?php
//leap year program in oop:-
  class class1{
    
    function abc($y){
        if($y%4==0){
            echo "$y  :  leap year";
         }else{
            echo "$y  :  not leap year";
         }
    }
   }
   
   $obj=new class1();
  $obj->abc(2024);