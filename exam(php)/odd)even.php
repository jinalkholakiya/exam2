<!DOCTYPE html>
<!-- <html>
<head>
    <title>odd)even</title>
</head>
<body>
<?php
$n=10;
for($i = 0; $i < $n; $i++){
    if($i %2 == 0)
    {
        echo "even numbers  : ";
        echo $i."<br>";
        echo "<br>";
    }
    else{
        echo "odd numbers  :  ";
        echo $i."<br>";
        echo "<br>";
    }
}
?>

</body>
</html> -->

<?php
//odd even program in oop:-

  class class1{
    
    function abc($y){
      for($y=0;$y<=10;$y++)
        if($y%2==0){
            echo "$y  :  even";
            echo"<br>";
         }else{
            echo "$y  :  odd";
            echo"<br>";
         }
    }
   }
   
   $obj=new class1();
  $obj->abc(2);
