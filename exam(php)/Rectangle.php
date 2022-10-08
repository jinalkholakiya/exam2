<title>Rectangle</title>
<?php  
 $length = 14;  
 $width = 12;  
 echo "area of rectangle is $length * $width= " . ($length * $width) . "<br />"; 
 ?>


<?php

//Rectangle program in oop:-
  class class1{
    
    function abc($length,$width){
         
        echo "area of rectangle is $length * $width= " . ($length * $width) . "<br />"; 
 
    }
   }
   
   $obj=new class1();
  $obj->abc(5,5);
?>